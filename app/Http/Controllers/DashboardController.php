<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
            return view('user.dashboard');
        }
        elseif(auth()->user()->role == 1){
            return view('tutor.dashboard');
        }
        else{
            return view('admin.dashboard');
        }
    }
}
