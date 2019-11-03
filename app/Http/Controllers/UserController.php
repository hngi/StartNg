<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Courses;
use App\RegisteredCourses;
use App\Reviews;
use App\Assignment;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = auth()->user()->role;
        if ($role == 0){
            return back()->with('error', 'Unauthorized Page');
        }
        else{
            $user_role = ($role == 1) ? 'tutor' : 'admin';
            $students = User::where('role', 0)->paginate(10);
        }
        
        return view("$user_role.users")->with('students', $students);
    }

    public function courses()
    {
        $id = auth()->user()->id;
        $data = array(
            'courses' => Courses::all(),
            'registered_courses' => RegisteredCourses::where('user_id', $id)->get(),
            'users' => User::all(),
        );
        return view('user.view-courses')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
     public function profile()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = User::find($id);
        $role = auth()->user()->role;
        if ($role == 0){
            if ($student->id == auth()->user()->id){
                $user_role = 'user';
                $data = array(
                    'student' => $student
                );
            }
            else{
                return back()->with('error', 'Unauthorized Page');
            }
            
        }
        else{
            $user_role = ($role == 1) ? 'tutor' : 'admin';
            if ($student->role == 0){
                $registered_courses = RegisteredCourses::where('user_id', $id)->get();
                $courses = Courses::all();
                $data = array(
                    'courses' => $courses,
                    'registered_courses' => $registered_courses,
                    'student' => $student
                );
            }
            else{
                return back()->with('error', 'Unauthorized Page');
            }
        }
        
        return view("$user_role.show-user")->with($data);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return redirect(route('user.show', $id));
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
        $user = User::find($id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->save();

        return back()->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'uui';
        /*$user = User::find($id);
        $role = auth()->user()->role;
        if ($role == 0){
            return back()->with('error', 'Uauthorized Permission');
        }
        else{
            if ($user->role == 0){
                return 'lk';
                $user->active = ($user->active == 0) ? 1 : 0;
                $action = ($user->active == 1) ? "enabled" : "disabled";
                $user->save();
                return back()->with("success", "$user->username has been $action successfully");
            }
            else{
                return back()->with('error', 'Uauthorized Permission');
            }
        }*/
    }

    public function review($id)
    {
        $course = Courses::find($id);
        return view('user.give-review')->with('course', $course);
    }

    public function store_review(Request $request, $id)
    {
        $course = Courses::find($id);

        $review = new Reviews;
        $review->user_id = auth()->user()->id;
        $review->course_id = $id;
        $review->comment = $request->input('review');
        $review->save();

        return back()->with('success', 'Review Sent Successfully');
    }

    public function disable($id)
    {
        $user = User::find($id);
        $role = auth()->user()->role;
        if ($role == 0){
            return back()->with('error', 'Uauthorized Permission');
        }
        else{
            if ($user->role == 0){
                $user->active = ($user->active == 0) ? 1 : 0;
                $action = ($user->active == 1) ? "enabled" : "disabled";
                $user->save();
                return back()->with("success", "$user->username has been $action successfully");
            }
            else{
                return back()->with('error', 'Uauthorized Permission');
            }
        }
    }
}
