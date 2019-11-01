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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        
        $data = array(
            'courses' => Courses::all(),
            'registered_courses' => RegisteredCourses::where('user_id', $id)->get(),
            'users' => User::all(),
        );
        return view('user.view-my-courses')->with($data);
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
        $user = auth()->user()->id;
        $course = Courses::find($id);
        $registered = RegisteredCourses::where(['course_id'=>$id, 'user_id'=>$user])->exists();
        if($registered){
            return view('user.view-registered-course-detail')->with('course', $course);
        }
        else{
            return view('user.view-course-detail')->with('course', $course);
        }
        
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
        //
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
    
    public function profile()
    {
        $id = auth()->user()->id;
        $user = User::find($id);
        
        return view('user.view-profile')->with('user', $user);
    }

    public function assignment()
    {
        $id = auth()->user()->id;
        $user = User::find($id);
        $data = array(
            'courses' => Courses::all(),
            'registered_courses' => RegisteredCourses::where('user_id', $id)->get(),
            'assignments' => Assignment::all(),
        );
        
        return view('user.view-assignments')->with($data);
    }

    public function assignment_detail($id)
    {
        $assignment = Assignment::find($id);
        $data = array(
            'courses' => Courses::all(),
            'assignment' => $assignment,
        );
        
        return view('user.view-assignment-detail')->with($data);
    }
}
