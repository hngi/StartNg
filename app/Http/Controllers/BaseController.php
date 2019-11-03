<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Courses;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    public function index()
    {
        $courses = DB::table('courses')->where('active',true)->take(6)->get();
        return view('pages.new_index',compact('courses'));
    }

    public function about(){
        return view('pages.about');
    }

    public function hire(){
        return view('pages.hireGrad');
    }

    public function contact(){
        return view('pages.contactus');
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
        return view('pages.find-course');
    }

    public function faq(){
        return view('pages.faq');
    }

    public function curriculum(){
        return view('pages.curriculum');
    }

    public function getCourse(){
        $data= request()->validate([
            'course'=>'required'
        ]);

        $query= Courses::Where('title', 'like', '%' . $data['course'] . '%')->exists();
        if($query){
            $courses= Courses::Where('title', 'like', '%' . $data['course'] . '%')->get();
            return view('pages.new_search',compact('courses'));
        }

        return redirect()->route('find-course')->with('error','Course not Found');
    }
}
