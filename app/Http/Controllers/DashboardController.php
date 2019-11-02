<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Courses;
use App\RegisteredCourses;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->role == 0){
            $id = auth()->user()->id;
        
            $data = array(
            'courses' => Courses::all(),
            'registered_courses' => RegisteredCourses::where('user_id', $id)->get(),
            'users' => User::all(),
        );
            return view('user.dashboard')->with($data);
        }
        elseif(auth()->user()->role == 1){
            return view('tutor.dashboard');
        }
        else{
            return view('admin.dashboard');
        }
    }
}
