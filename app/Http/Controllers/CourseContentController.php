<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Courses;
use App\CourseContent;

class CourseContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if(\Auth::check()){
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
        }
        else{
            $user_role = 'course';
            $course = Courses::find($id);
            $course_contents = CourseContent::where('course_id', $course->id)->get();
            $data = array(
                'courses' => Courses::where('active', 1)->paginate(10),
            );
        }
          

        return view("$user_role.courses")->with($data);
        
        
        return view('course.course_contents')->with('course_contents', $course_contents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = auth()->user()->role;

        if ($role == 0){
            return back()->with('error', 'Unauthorized page');
        }
        else{
            $user_role = ($role == 1) ? 'tutor' : 'admin';
            $id = auth()->user()->id;
            $courses = Courses::where('user_id', $id)->get();
            return view("$user_role.create-course-content")->with('courses', $courses);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $content = new CourseContent;
        $content->title = $request->input('title');
        $content->course_id = $request->input('course');
        $content->save();

        return back()->with('success', 'Course Content Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content = CourseContent::find($id);
        return view('course.content_detail')->with('content', $content);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
