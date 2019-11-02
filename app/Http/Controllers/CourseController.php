<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Courses;
use App\RegisteredCourses;
use App\User;
use App\Reviews;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = auth()->user()->role;
        if ($role == 2){
            $user_role = 'admin';
            $data = array(
                'courses' => Courses::orderBy('created_at','asc')->paginate(5),
                'registered_courses' => RegisteredCourses::all(),
                'users' => User::all(),
            );
        }
        else{
            $user_role = ($role == 1) ? 'tutor' : 'user';
            $data = array(
                'courses' => Courses::where('active', 1)->paginate(10),
                'registered' => RegisteredCourses::where('user_id', auth()->user()->id)->get()
            );
        }   

        return view("$user_role.courses")->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = auth()->user()->role;
        if ($role == 2){
            $user_role = 'admin';
            $users = User::all();
        }
        else{
            return back()->with('error', 'Unauthorized');
        }
        
        return view("$user_role.create-course")->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=request()->validate([
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'duration'=>'required',
            'tutor'=>'required'
        ]);

        $course = new Courses;
        $course->title = $request->input('title');
        $course->description = $request->input('body');
        $course->duration = $request->input('duration');
        $course->price = $request->input('price');     
        $course->user_id = auth()->user()->id;
        $course->save();
        
        return redirect('/')->with('success','Course Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Courses::find($id);
        
        if($course){
            if(auth()->user()){
                $role = auth()->user()->role;
                if ($role == 2){
                    $user_role = 'admin';
                    $registered_courses = RegisteredCourses::where('course_id', $id)->get();
                    $reviews = Reviews::where('course_id', $id)->get();
            
                    $data = array(
                        'course' => $course,
                        'number' => count($registered_courses),
                        'users' => User::all(),
                        'reviews' => $reviews,
                    );
                }
                elseif ($role == 1){
                    $user_role = 'tutor';
                    $registered_courses = RegisteredCourses::where('course_id', $id)->get();
            
                    $data = array(
                        'course' => $course,
                        'number' => count($registered_courses),
                        'users' => User::all(),
                    );
                }
                elseif ($role == 0){
                    $user_role = 'user';
                    $user_id = auth()->user()->id;
                    $data = array(
                        'course' => $course,
                        'registered' => RegisteredCourses::where(['course_id'=>$id, 'user_id'=>$user_id])->exists()
                    );
                }
            }
            else{
                $user_role = 'course';
                $data = array(
                    'course' => $course,
                );
            }
        }
        else{
            return back()->with('error', 'Course not found');
        }
        return view("$user_role.show-course")->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=request()->validate([
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'duration'=>'required',
            'tutor'=>'required'
        ]);

        $course = Courses::find($id);
        $course->title = $request->input('title');
        $course->description = $request->input('body');
        $course->duration = $request->input('duration');
        $course->price = $request->input('price');     
        $course->user_id = auth()->user()->id;
        $course->save();
        
        return redirect('/')->with('success','Course Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        if (empty($course)) {
            Flash::error('Course not found');
            return redirect(route('index'));
        }

        $course->active = ($course->active == 0) ? 1 : 0;
        $title = ($course->active == 1) ? "enabled" : "disabled";


        $course->save();
        return redirect(route('course.index'));
    }

    public function registerCourses($id)
    {

        $check = Courses::where('id',$id)->exists();
        if($check){
            $post = RegisteredCourses::where('user_id',auth()->user()->id)
                ->where('course_id',$id)->exists();

            if($post){
                return back()->with('error', 'You Have Previously Registered for the Course');
            }
            else{
                $add_course = new RegisteredCourses;
                $add_course->course_id = $id;
                $add_course->user_id = auth()->user()->id;
                $add_course->progress = 0;
                $add_course->save();                
                return back()->with('success', 'Registration was Succesful');
            }
        }
        else{
            return back()->with('error', 'Course does not exist');
        }
    }

    public function myCourses()
    {
        $role = auth()->user()->role;
        if ($role == 0){
            $myCourses = RegisteredCourses::where('user_id', auth()->user()->id)->get();
            $courses = Courses::all();

            $data = array(
                'myCourses' => $myCourses,
                'courses' => $courses,
                'users' => User::all()
            );
            return view('user.my-courses')->with($data);
        }
        else{
            return 'fail';
        }
    }
}