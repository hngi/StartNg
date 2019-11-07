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
        //
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
            $courses = Courses::where('tutor_id', $id)->get();
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
        $content->details = $request->input('details');
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
        $role = auth()->user()->role;
        $content = CourseContent::find($id);

        if ($role == 0){
            return back()->with('error', 'Unauthorized page');
        }
        else{
            $user_role = ($role == 1) ? 'tutor' : 'admin';
            $tutor_id = auth()->user()->id;
            $courses = Courses::where('tutor_id', $tutor_id)->get();
            foreach ($courses as $course){
                if ($content->course_id==$course->id){
                    $data = array(
                        'courses' => $courses,
                        'content' => $content
                    );
                    return view("$user_role.edit-course-content")->with($data);
                }
                else{
                    return back()->with('error', 'Unauthorized page');
                }
            }
        }
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
            'details'=>'required',
        ]);

        $content = CourseContent::find('$id');
        $content->title = $request->input('title');
        $content->details = $request->input('details');
        if ($request->input('course')){
            $content->course_id = $request->input('course');
        }
        $content->save();

        return back()->with('success', 'Course Content Updated');
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
