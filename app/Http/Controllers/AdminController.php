<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Courses;
use App\RegisteredCourses;
use App\Reviews;

class AdminController extends Controller
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
        if ($role == 2){
            $user_role = 'admin';
            $admins = User::where('role', 2)->paginate(10);
        }
        else{
            return back()->with('error', 'Unauthorized page');
        }

        return view("$user_role.admins")->with('admins', $admins);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(){
        $role = auth()->user()->role;
        if ($role == 2){
            $user_role = 'admin';
        }
        else{
            return back()->with('error', 'Unauthorized page');
        }

        return view("$user_role.create-admin");
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
        if ($role == 2){
            $user_role = 'admin';
            $user = User::find($id);
            if($user->role == 2){
                $admin = $user;
                $courses = Courses::where('user_id', $id);
            }
            else{
                return back()->with('error', 'User not Admin'); 
            }
        }
        else{
            return back()->with('error', 'Unauthorized page');
        }

        $data = array(
            'admin' => $admin,
            'courses' => $courses
        );

        return view("$user_role.show-admin")->with($data);
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
        if ($role == 2){
            $user_role = 'admin';
            $user = User::find($id);
            if($user->role == 2){
                $admin = $user;
            }
            else{
                return back()->with('error', 'User not Admin'); 
            }
        }
        else{
            return back()->with('error', 'Unauthorized page');
        }

        $data = array(
            'admin' => $admin,
        );

        return view("$user_role.edit-admin")->with($data);

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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:14'],
            'role' => 'required'
        ]);
        
        $admin = User::find($id);
        $admin->first_name = $request->input('first_name');
        $admin->last_name = $request->input('last_name');
        $admin->username = $request->input('username');
        $admin->email = $request->input('email');
        $admin->phone = $request->input('phone');
        $admin->role = $request->input('role');
        $admin->save();
        
        return back()->with('success','Admin Successfully Updated');
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

    public function view_courses()
    {
        $data = array(
            'courses' => Courses::orderBy('created_at','asc')->paginate(5),
            'registered_courses' => RegisteredCourses::all(),
            'users' => User::all(),
        );
        return view('admin.view-courses')->with($data);
    }

    public function view_course_detail($id)
    {
        $course = Courses::find($id);
        $registered_courses = RegisteredCourses::where('course_id', $id)->get();
        $reviews = Reviews::where('course_id', $id)->get();

        $data = array(
            'course' => $course,
            'number' => count($registered_courses),
            'users' => User::all(),
            'reviews' => $reviews,
        );
        return view('admin.view-course-detail')->with($data);
    }
}