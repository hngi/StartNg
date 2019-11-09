<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Courses;
use App\RegisteredCourses;
use App\Schedule;
use App\Assignment;

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
        $role = auth()->user()->role;

        if($role == 0){
            $id = auth()->user()->id;
            $user_role = 'user';

            $data = array(
                'courses' => Courses::all(),
                'registered_courses' => RegisteredCourses::where('user_id', $id)->get(),
                'users' => User::all(),
                'schedules' => Schedule::all(),
                'assignments' => Assignment::where('active', 1)->get()
            );
        }
        else{
            $user_role = ($role == 1) ? 'tutor' : 'admin';
            $data = array(
                'courses' => Courses::all(),
                'schedules' => Schedule::all()
            );
        }
        return view("$user_role.dashboard")->with($data);
    }
}
