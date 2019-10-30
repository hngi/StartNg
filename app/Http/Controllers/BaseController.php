<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Courses;

class BaseController extends Controller
{
    public function index()
    {
        $courses = Courses::all();
        return view('pages.index',compact('courses'));
    }

    public function about(){
        return view('pages.about');
    }

    public function hire(){
        return view('pages.hire');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function help(){
        return view('pages.help');
    }

    public function terms(){
        return view('pages.terms');
    }

    public function privacy(){
        return view('pages.privacy');
    }

    public function find_course(){
        return view('pages.findcourse');
    }

    public function faq(){
        return view('pages.faq');
    }

    public function curriculum(){
        return view('pages.curriculum');
    }
}
