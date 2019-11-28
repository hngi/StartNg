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
use Excel;

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
            $courses = Courses::where('user_id', auth()->user()->id)->get();
            $contents = CourseContent::all();
            $submissions = Submission::all();
            $students = User::where('role', 0)->get();

            $data = array(
                'courses' => $courses,
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
            $user_id = auth()->user()->id;

            $data = array(
                'registered_courses' => RegisteredCourses::where('user_id', $user_id)->get(),                
                'contents' => CourseContent::all()
            );

            return view('user.create-submission')->with($data);
        }
        else{
            $user_role = ($role == 1) ? 'tutor' : 'admin';
            $id = auth()->user()->id;
            return view("$user_role.score");
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
        $this->validate($request, [
            'file' => 'required',
            'content' => 'required',
        ]);
        if($request->hasFile('submission')){
            $filenameWithExt = $request->file('submission')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('submission')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('submission')->storeAs('public/submissions', $fileNameToStore);
        }

        $submission = new Submission;
        $submission->score = 0;
        $submission->course_content_id = $request->input('content');
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
    public function score(Request $request)
    {
        $this->validate($request, [
            'file'  => 'required|mimes:xls,xlsx'
           ]);
        
        $path = $request->file('file')->getRealPath();
        
        $data = Excel::load($path)->get();

        return 'here';

        
        return 'Working on it';
        if($data->count() > 0)
        {
         foreach($data->toArray() as $key => $value)
         {
          foreach($value as $row)
          {
           $record = Submission::where(['assignment'=>$id, 'user_id'=>$row['user']])->get();
           $record->score = $row['score'];
          }
         }
        }
        return 'gf';
        return back()->with('success', 'Success');
       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
