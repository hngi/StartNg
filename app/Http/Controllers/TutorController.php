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

    public function profile()
    {
        $id = auth()->user()->id;
        $tutor = User::find($id);
        
        return view('tutor.user-profile')->with('tutor', $tutor);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('tutor.dashboard');
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
        $this->validate($request, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:14'],
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
        
          return redirect('/tutors/myprofile')->with('success', 'Profile updated!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tutor = user::find($id);
        $tutor->delete();

        return redirect('/view-tutors')->with('success', 'tutor deleted!');
    }
}
