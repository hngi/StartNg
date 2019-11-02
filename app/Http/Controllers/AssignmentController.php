<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assignment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Courses;
use Intervention\Image\Facades\Image;

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
            $courses=Courses::theList();

              return view('tutor.assignment',compact('courses'));
    }
      public function upload()
      {
              return view('tutor.upload-resource');
    }

    public function uploadAss(Request $request){
        $data = request()->validate([
            'image'=>'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description'=>'',
            'course_id'=>'required',
            'due_date'=>'required'
        ]);

        $name=Str::random(6);
        $ass = new Assignment();

        if ($request->has('image')) {
            $image = $request->file('image');
            $image_resize=Image::make($image)->resize(320,240);
            $name = Str::slug($name.'_'.time());
            $folder = '/uploads/';
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            $image_resize->save('storage'.$filePath);
            $ass->image=$filePath;
        }



        $ass->description=$data['description'];
        $ass->user_id=Auth::user()->id;
        $ass->course_id=$data['course_id'];
        $ass->due_date=$data['due_date'];

        if($ass->save()){
            return back()->with('success','Assignment Created Successfully');
        }

        return back()->with('error','Something went wrong. Please Try again');


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
