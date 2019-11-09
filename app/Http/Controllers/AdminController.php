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

    public function store(Request $request)
    {
        $this->validate($request, [
           'first_name' => ['required', 'string','min:4', 'max:255', 'regex:/^[a-zA-Z]+$/u'],
            'last_name' => ['required', 'string', 'min:4','max:255','regex:/^[a-zA-Z]+$/u'],
            'username' => ['required', 'string', 'max:255','unique:users'],
            'email' => ['required', 'email', 'max:255','unique:users'],
            'phone' => ['required', 'numeric'],
            'role' => 'required'
        ]);
    
    $admin = new User;
    $admin->first_name = $request->input('first_name');
    $admin->last_name = $request->input('last_name');
    $admin->username = $request->input('username');
    $admin->email = $request->input('email');
    $admin->password = $request->input('password');
    $admin->phone = $request->input('phone');
    $admin->role = $request->input('role');
    $admin->save();
    
    return back()->with('success','Admin Successfully Updated');
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
                $courses = Courses::where('tutor_id', $id)->get();
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
        if ($id==auth()->user()->id){
            $admin = User::find($id);
            return view('admin.edit-admin')->with('admin', $admin);
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
    {
        $this->validate($request, [
            'first_name' => ['required', 'string','min:4', 'max:255', 'regex:/^[a-zA-Z]+$/u'],
            'last_name' => ['required', 'string', 'min:4','max:255','regex:/^[a-zA-Z]+$/u'],
            'username' => ['required', 'string', 'max:255','unique:users'],
            'email' => ['required', 'email', 'max:255','unique:users'],
            'phone' => ['required', 'numeric', 'size:11', 'max:14']
        ]);
        
        $admin = User::find($id);
        $admin->first_name = $request->input('first_name');
        $admin->last_name = $request->input('last_name');
        $admin->username = $request->input('username');
        $admin->email = $request->input('email');
        $admin->phone = $request->input('phone');
        $admin->profile_pic = $request->input('profile_pic');
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
}