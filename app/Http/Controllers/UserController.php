<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Courses;
use App\RegisteredCourses;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = auth()->user()->id;
        
        $data = array(
            'courses' => Courses::all(),
            'registered_courses' => RegisteredCourses::where('user_id', $id)->get(),
            'users' => User::all(),
        );
        return view('user.view-courses')->with($data);
    }

    public function profile()
    {
        $id = auth()->user()->id;
        $user = User::find($id);
        
        return view('user.user-profile')->with('user', $user);
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
        $course = Courses::find($id);
        return view('user.view-course-detail')->with('course', $course);
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
    public function update(Request $request)
    {

        $id = auth()->user()->id;
        $user = User::findorfail($id);



        $data= $request->validate([
           'first_name'=>'required',
            'last_name'=>'required',
            'username'=>'required',
            'email'=>'required',
            'address'=>'',
            'about'=>'',
            'image'=>'image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone'=>'required'
        ]);




        if ($request->has('image')) {
            $image = $request->file('image');
            $image_resize=Image::make($image)->resize(320,240);
            $name = Str::slug($request->input('first_name')).'_'.time();
            $folder = '/uploads/';
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            $image_resize->save('storage'.$filePath);
            $user->image = $filePath;
        }


        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->email = $data['email'];
        $user->phone = $data['phone'];
        $user->about =$data['about'];
        $user->username=$data['username'];

        $user->save();



        return redirect()->route('user.profile')->with('success','Profile Updated Successfully');

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
