<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
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
            'title' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $course = new Course;
        $course->title = $request->input('title');
        $course->duration = $request->input('duration');
        $course->price = $request->input('price');
        $course->description = $request->input('description');
        $course->curriculum = "Empty";
        $course->image = "https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570961660/startng/Group_415_m3n0cq.png";
        $course->save();

        return redirect('/courses')->with('success', 'Course Created');
    }

//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show($id)
//     {
//         //
//     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        
        if (!isset($course)){
            return redirect('/courses')->with('error', 'No Post Found');
        }
        else{
            $course->title = $course->title;
            $course->duration = $course->title;
            $course->price = $course->title;
            $course->description = $course->title;
        }
        

        return view('courses.edit')->with('course', $course);
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
            'title' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $course = Course::find($id);
        $course->title = $request->input('title');
        $course->duration = $request->input('duration');
        $course->price = $request->input('price');
        $course->description = $request->input('description');
        $course->curriculum = "Empty";
        $course->image = "https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570961660/startng/Group_415_m3n0cq.png";
        $course->save();

        return redirect('/courses')->with('success', 'Course Updated');
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
