<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Courses;
use App\RegisteredCourses;
use App\Reviews;
use App\Assignment;

class UserController extends Controller
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
        if ($role == 0){
            return back()->with('error', 'Unauthorized Page');
        }
        else{
            $user_role = ($role == 1) ? 'tutor' : 'admin';
            $students = User::where('role', 0)->paginate(10);
        }

        return view("$user_role.users")->with('students', $students);
    }

    public function courses()
    {
        $id = auth()->user()->id;
        $data = array(
            'courses' => Courses::all(),
            'registered_courses' => RegisteredCourses::where('user_id', $id)->get(),
            'users' => User::all(),
        );
        return view('user.view-courses')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.template');
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
        $student = User::find($id);
        $role = auth()->user()->role;
        if ($role == 0){
            if ($student->id == auth()->user()->id){
                $user_role = 'user';
                $data = array(
                    'student' => $student
                );
            }
            else{
                return back()->with('error', 'Unauthorized Page');
            }

        }
        else{
            $user_role = ($role == 1) ? 'tutor' : 'admin';
            if ($student->role == 0){
                $registered_courses = RegisteredCourses::where('user_id', $id)->get();
                $courses = Courses::all();
                $data = array(
                    'courses' => $courses,
                    'registered_courses' => $registered_courses,
                    'student' => $student
                );
            }
            else{
                return back()->with('error', 'Unauthorized Page');
            }
        }

        return view("$user_role.show-user")->with($data);

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
        if ($id==auth()->user()->id){
            $user = User::find($id);
            return view('user.edit-user')->with('user', $user);
        }
        else{
            return back()->with('error', 'Access Denied');
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
    {  $this->validate($request, [
           'profile_pic' => ['required', 'string', 'max:500'] ]);
        
        if($request->hasFile('profile_pic')){
            $filenameWithExt = $request->file('profile_pic')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('profile_pic')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('profile_pic')->storeAs('public/profile_pictures', $fileNameToStore);
        }

        $user = User::find($id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->status = $request->input('status');
        $user->about = $request->input('about');
        $user->profile_pic = $request->input('profile_pic');
        if($request->hasFile('profile_pic')){
            $user->profile_pic = $fileNameToStore;
        }
        $user->save();

        return back()->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $role = auth()->user()->role;
        if ($role == 0){
            return back()->with('error', 'Uauthorized Permission');
        }
        else{
            if ($user->role == 0){
                $user->active = ($user->active == 0) ? 1 : 0;
                $action = ($user->active == 1) ? "enabled" : "disabled";
                $user->save();
                return back()->with("success", "$user->username has been $action successfully");
            }
            else{
                return back()->with('error', 'Uauthorized Permission');
            }
        }
    }

    public function disable($id)
    {
        $user = User::find($id);
        $role = auth()->user()->role;
        if ($role == 0){
            return back()->with('error', 'Uauthorized Permission');
        }
        else{
            if ($user->role == 0){
                $user->active = ($user->active == 0) ? 1 : 0;
                $action = ($user->active == 1) ? "enabled" : "disabled";
                $user->save();
                return back()->with("success", "$user->username has been $action successfully");
            }
            else{
                return back()->with('error', 'Uauthorized Permission');
            }
        }
    }
}
