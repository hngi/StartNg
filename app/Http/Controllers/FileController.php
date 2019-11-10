<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\File;
use App\Courses;
class FileController extends Controller
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
            $files = File::where('active', 1)->get();
        }
        else{
            $user_role = ($role == 1) ? 'tutor' : 'admin';
            $registered_courses = '';
            $courses = Courses::where('tutor_id', $id)->get();
            $files = File::all();
        }

        $data = array(
            'courses' => $courses,
            'files' => $files,
        );
        return view("$user_role.view-resource")->with($data);
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
            $files = file::all();
            $data = array(
                'courses' => $courses,
                'files' => $files
            );
            return view("$user_role.upload-resource")->with($data);
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
       if($request->hasFile('file')){
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('file')->storeAs('public/files', $fileNameToStore);
        }
       
        $file = new file;
        $file->file = $request->input('file');
        $file->title = $request->input('title');
        $file->description = $request->input('description');
        if($request->hasFile('file')){
            $file->file = $fileNameToStore;
        }
        $file->save();

        return back()->with('success', 'File Uploaded Successfully');
}
    public function download($file)
    {
      
        return response()->download(storage_path("/public/files/{$file}"));
        // view("files.download", compact('$download'));
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
