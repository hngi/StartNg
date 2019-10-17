<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function hireGrad(){
        $title = 'Hire A Graduate';
        return view('pages.hireGrad')->with('title', $title);
    }

    public function contactus(){
        $title = 'Contact Us';
        return view('pages.contactus')->with('title', $title);
    }

    public function help(){
        $title = 'Help';
        return view('pages.help')->with('title', $title);
    }

    public function terms(){
        $title = 'Terms of Service';
        return view('pages.terms')->with('title', $title);
    }

    public function blog1(){
        $title = 'Student Stories';
        return view('pages.blog1')->with('title', $title);
    }

    public function blog2(){
        $title = 'Blog';
        return view('pages.blog2')->with('title', $title);
    }
}
