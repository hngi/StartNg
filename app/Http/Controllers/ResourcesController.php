<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Courses;
use App\Resource;
use App\RegisteredCourses;

class ResourcesController extends Controller
{
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
            $resources = Resource::all();
        }
        else{
            $user_role = ($role == 1) ? 'tutor' : 'admin';
            $registered_courses = '';
            $courses = Courses::where('user_id', $id)->get();
            $resources = Resource::all();
        }

        $data = array(
            'registered_courses' => $registered_courses,
            'courses' => $courses,
            'resources' => $resources
        );
        return view("$user_role.resources")->with($data);
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
            return view("$user_role.create-resource")->with('courses', $courses);
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
            'file' => 'required'
        ]);

        if($request->hasFile('file')){
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore= $filename.'.'.$extension;
            $path = $request->file('file')->storeAs('public/resources', $fileNameToStore);
        }

        $resource = new Resource;
        $resource->file = $fileNameToStore;
        $resource->course_id = $request->input('course');
        $resource->save();

        return back()->with('success', 'Resource Upload Successfully');
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
