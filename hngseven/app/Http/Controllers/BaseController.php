<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\RegisteredCourse;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        $courses = DB::table('courses')->get();

        return view('frontend.frontend.index',compact('courses'));
    }

    public function registerCourses($id)
    {

        $check=DB::table('courses')->where('id',$id)->exists();
        if($check){
//            $post = RegisteredCourse::where('user_id', auth()->user()->id);
            $post=DB::table('registered_courses')->where('user_id',auth()->user()->id)
                ->where('course_id',$id)->exists();

            if($post){
                $message='You Have Previously Registered for the Course';
            }
            else{
                $result=auth()->user()->registercourse()->create([
                   "course_id"=>$id
                ]);
                $message='Registration was Succesfull';
            }
        }
        else{
            $message='Course Does Not Exist';
        }
        return back();
    }

    public function details($id){
        $check=DB::table('courses')->where('id',$id)->exists();


        if($check){
            $course=DB::table('courses')->where('id',$id)->get()[0];

            return view('frontend.frontend.details-course',compact('course'));
        }
        else{

        }
    }

    public function login()
    {
        return view('frontend.frontend.login');
    }

    public function register()
    {
        return view('frontend.frontend.register');
    }

    public function admin()
    {
        return view('frontend.frontend.admin');
    }

    public function contact()
    {
        return view('frontend.frontend.contact');
    }
    public function about()
    {
        return view('frontend.frontend.about');
    }
    public function hire()
    {
        return view('frontend.frontend.hire');
    }
    public function courses()
    {
        return view('frontend.frontend.courses');
    }
    public function help()
    {
        return view('frontend.frontend.help');
    }
    public function terms()
    {
        return view('frontend.frontend.terms');
    }
    public function blog1()
    {
        return view('frontend.frontend.blog1');
    }
    public function blog2()
    {
        return view('frontend.frontend.blog2');
    }
    public function privacy()
    {
        return view('frontend.frontend.privacy');
    }
    public function curriculum()
    {
        return view('frontend.frontend.curriculum');
    }
}
