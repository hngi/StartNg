<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assignment;
use App\User;
use App\Courses;
use App\RegisteredCourses;
use App\CourseContent;

class AssignmentController extends Controller
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
        $id = auth()->user()->id;
        if ($role == 0){
            $user_role = 'user';
            $registered_courses = RegisteredCourses::where('user_id', $id)->get();
            $courses = Courses::all();
            $contents = CourseContent::all();
            $assignments = Assignment::where('active', 1)->get();
        }
        else{
            $user_role = ($role == 1) ? 'tutor' : 'admin';
            $registered_courses = '';
            $courses = Courses::where('user_id', $id)->get();
            $assignments = Assignment::all();
        }

        $data = array(
            'registered_courses' => $registered_courses,
            'courses' => $courses,
            'assignments' => $assignments,
            'contents' => $contents
        );
        return view("$user_role.assignment")->with($data);
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
            $contents = CourseContent::all();
            $data = array(
                'courses' => $courses,
                'contents' => $contents
            );
            return view("$user_role.create-assignment")->with($data);
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
        $assignment = new Assignment;
        $assignment->title = $request->input('title');
        $assignment->description = $request->input('description');
        $assignment->duration = $request->input('duration');
        $assignment->course_content_id = $request->input('content');
        $assignment->save();

        return back()->with('success', 'Assignment Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = auth()->user()->role;
        $user_id = auth()->user()->id;
        $assignment = Assignment::find($id);
        if ($role == 0){
            $content = CourseContent::where('id', $assignment->course_content_id)->get()[0];
            $registered = RegisteredCourses::where(['user_id'=>$user_id, 'course_id'=>$content->course_id])->get()[0];
            if($content->course_id==$registered->course_id){
                $user_role = 'user';
            }
            else{
                return back()->with('error', 'You cannot view this Assignment');
            }
        }
        else{
            $content = CourseContent::where('id', $assignment->course_content_id)->get()[0];
            $mycourse = Courses::where(['user_id'=>$user_id, 'id'=>$content->course_id])->get()[0];
            if($content->course_id==$mycourse->id){
                $user_role = ($role == 1) ? 'tutor' : 'admin';
            }
            else{
                return back()->with('error', 'You cannot view this Assignment');
            }
        }

        $data = array(
            'assignment' => $assignment,
        );

        return view("$user_role.show-assignment")->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = auth()->user()->role;
        $user_id = auth()->user()->id;
        $assignment = Assignment::find($id);
        if ($role == 0){
            return back()->with('error', 'Access Denied');
        }
        else{
            $mycourse = Courses::where(['user_id'=>$user_id, 'id'=>$assignment->user_id])->exists();
            if($mycourse){
                $user_role = ($role == 1) ? 'tutor' : 'admin';
            }
            else{
                return back()->with('error', 'Access Denied');
            }
        }

        $data = array(
            'assignment' => $assignment,
            'courses' => Courses::where('user_id', $user_id)->get()
        );

        return view("$user_role.edit-assignment")->with($data);
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
        $assignment =  Assignment::find($id);
        $assignment->title = $request->input('title');
        $assignment->description = $request->input('description');
        $assignment->duration = $request->input('duration');
        $assignment->user_id = $request->input('course');
        $assignment->save();

        return back()->with('success', 'Assignment Updated');
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
