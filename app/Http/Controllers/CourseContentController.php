<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\RegisteredCourses;
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
        $this->validate($request, [
            'title' => ['required', 'string'],
            'details' => ['required', 'string'],
            'course' => ['required'],
            'assignment' => ['required', 'string'],
        ]);

        $content = new CourseContent;
        $content->title = $request->input('title');
        $content->details = $request->input('details');
        $content->course_id = $request->input('course');
        $content->assignment = $request->input('assignment');
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
        $course_content = CourseContent::find($id);
        
        if($course_content){
            if(auth()->user()){
                $role = auth()->user()->role;
                if ($role == 2){
                    $user_role = 'admin';
            
                    $data = array(
                        'course' => Course::where('user_id', auth()->user()->id),
                        'course_content' => $course_content
                    );
                }
                elseif ($role == 1){
                    $user_role = 'admin';
            
                    $data = array(
                        'course' => Course::where('user_id', auth()->user()->id),
                        'course_content' => $course_content
                    );
                }
                elseif ($role == 0){
                    $user_role = 'user';
                    #$user_id = auth()->user()->id;
                    $data = array(
                        #'course' => $course,
                        #'registered' => RegisteredCourses::where(['course_id'=>$id, 'user_id'=>$user_id])->exists(),
                        'course_content' => $course_content
                    );
                }
            }
        }
        else{
            return back()->with('error', 'Course content not found');
        }
        return view("$user_role.show-course-content")->with($data);
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
            $user_id = auth()->user()->id;
            $courses = Courses::where('user_id', $user_id)->get();
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
        $this->validate($request, [
            'title' => ['required', 'string'],
            'details' => ['required', 'string'],
            'assignment' => ['required', 'string'],
        ]);

        $content = CourseContent::find($id);
        $content->title = $request->input('title');
        $content->details = $request->input('details');
        $content->assignment = $request->input('assignment');
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
