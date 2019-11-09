<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Assignment;
use App\Courses;
use App\RegisteredCourses;
use App\CourseContent;
use App\Submission;
use App\User;


use Illuminate\Support\Str;

class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = auth()->user()->role;
        if($role==0){
            return back()->with('error', 'What are you looking for?');
        }
        else{
            $user_role = ($role == 1) ? 'tutor' : 'admin';
            $courses = Courses::where('tutor_id', auth()->user()->id)->get();
            $contents = CourseContent::all();
            $assignments = Assignment::all();
            $submissions = Submission::all();
            $students = User::where('role', 0)->get();

            $data = array(
                'courses' => $courses,
                'assignments' => $assignments,
                'contents' => $contents,
                'submissions' => $submissions,
                'students' => $students
            );

            return view("$user_role.submissions")->with($data);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = auth()->user()->role;
        if($role==0){
            $user_role = 'user';
            $registered_courses = RegisteredCourses::where('user_id', auth()->user()->id)->get();
            $courses = Courses::all();
            $contents = CourseContent::all();
            $assignments = Assignment::where('active', 1)->get();

            $data = array(
                'registered_courses' => $registered_courses,
                'courses' => $courses,
                'assignments' => $assignments,
                'contents' => $contents
            );

            return view('user.create-submission')->with($data);
        }
        else{
            return back()->with('error', 'Unauthorized Permission');
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

        if($request->hasFile('submission')){
            $filenameWithExt = $request->file('submission')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('submission')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;

            $path = $request->file('submission')->storeAs('/submisssions', $fileNameToStore);


        } else {
            $fileNameToStore = '';
        }

        $submission = new Submission;
        $submission->score = 0;
        $submission->assignment_id = $request->input('assignment');
        $submission->user_id = auth()->user()->id;
        $submission->file = $fileNameToStore;
        $submission->save();
        return back()->with('success', 'Assignment submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
