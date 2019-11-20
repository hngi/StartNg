<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Courses;
use App\RegisteredCourses;
use App\User;
use App\Assignment;

class TutorController extends Controller
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
            $tutors = User::where('role', 1)->paginate(10);
        }
        else{
            return back()->with('error', 'Unauthorized page');
        }

        return view("$user_role.tutors")->with('tutors', $tutors);
    }
  
    public function view_courses()
    {
         $id = auth()->user()->id;
        
        $data = array(
            'courses' => Courses::where('user_id', $id)->get(),
            'registered_courses' => RegisteredCourses::all(),
            'users' => User::all(),
        );
        return view('tutor.view-courses')->with($data);
    }

     public function view_students()
    {
        $students = User::where('role', 0)->paginate(10);
        return view('tutor.view-students')->with('students', $students);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = auth()->user()->role;
        if ($role == 2){
            $user_role = 'admin';
        }
        else{
            return back()->with('error', 'Unauthorized page');
        }

        return redirect(route('admin.create'));
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:14', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'role' => 'required'
        ]);
        
        $tutor = User::find($id);
        $tutor->first_name = $request->input('first_name');
        $tutor->last_name = $request->input('last_name');
        $tutor->username = $request->input('username');
        $tutor->email = $request->input('email');
        $tutor->phone = $request->input('phone');
        $tutor->role = $request->input('role');
        $tutor->image = $request->input('image');
        $tutor->address = $request->input('address');
        $tutor->state = $request->input('state');
        $tutor->country = $request->input('country');
        $tutor->aboutme = $request->input('aboutme');
        $tutor->save();
        
        #return redirect("route('index')");
        return back()->with('success','Admin Successfully Created');

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
            if($user->role == 1){
                $tutor = $user;
                $courses = Courses::where('tutor_id', $id)->get();
            }
            else{
                return back()->with('error', 'User not Tutor'); 
            }
        }   
        else{
            return back()->with('error', 'Unauthorized page');
        }

        $data = array(
            'tutor' => $tutor,
            'courses' => $courses
        );

        return view("$user_role.show-tutor")->with($data);
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
            $tutor = User::find($id);
            return view('tutor.profile')->with('tutor', $tutor);
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
            'profile_pic' => 'image|nullable|max:1999'
        ]);
        
        if($request->hasFile('profile_pic')){
            $filenameWithExt = $request->file('profile_pic')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('profile_pic')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('profile_pic')->storeAs('public/profile_pictures', $fileNameToStore);
        } 

        $tutor = User::find($id);
        $tutor->first_name = $request->input('first_name');
        $tutor->last_name = $request->input('last_name');
        $tutor->username = $request->input('username');
        $tutor->email = $request->input('email');
        $tutor->phone = $request->input('phone');
        $tutor->status = $request->input('status');
        $tutor->about = $request->input('about');
        if($request->hasFile('profile_pic')){
            $tutor->profile_pic = $fileNameToStore;
        }
        $tutor->save();

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
        //
    }
    
    public function disable($id)
    {
        $tutor = User::find($id);
        $role = auth()->user()->role;
        if ($role == 2){
            if ($tutor->role == 1){
                $tutor->active = ($tutor->active == 0) ? 1 : 0;
                $action = ($tutor->active == 1) ? "enabled" : "disabled";
                $tutor->save();
                return back()->with("success", "$tutor->username has been $action successfully");
            }
            else{
                return back()->with('error', 'Access Denied');
            }
        }
        else{
            return back()->with('error', 'Uauthorized Permission');
        }
    }
}
