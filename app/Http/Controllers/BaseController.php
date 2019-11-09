<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Courses;

class BaseController extends Controller
{
    public function index()
    {
        $courses = Courses::where('active', 1)->orderBy('created_at','desc')->take(6)->get();
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

    public function search(){
        $data = request()->validate([
            'course'=>'required'
        ]);

        $query= Courses::where('title', 'like', '%' . $data['course'] . '%')->exists();
        if($query){
            $courses = Courses::where('title', 'like', '%' . $data['course'] . '%')->get();
            return view('pages.search',compact('courses'));
        }
        return redirect('find-course')->with('error', 'Course '. $data['course'].'  not found');
    }
}
