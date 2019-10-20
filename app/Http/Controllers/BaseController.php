<?php

namespace App\Http\Controllers;
use foo\bar;
use Illuminate\Support\Facades\DB;
use App\RegisteredCourse;
use Symfony\Component\HttpFoundation\Session\Flash;
use App\Contact;
use Illuminate\Support\Facades\Session;
use App\Course;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        $courses = DB::table('courses')->get();

        return view('pages.index',compact('courses'));
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
                Flash::error($message);
                return back();
            }
            else{
                $result=auth()->user()->registercourse()->create([
                   "course_id"=>$id
                ]);
                $message='Registration was Succesfull';
                Flash::success($message);
                return back();
            }
        }
        else{
            $message='Course Does Not Exist';
            Flash::error($message);
            return back();
        }


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

    public function search(){
        $data= request()->validate([
            'course'=>'required'
        ]);

        $query= Course::Where('name', 'like', '%' . $data['course'] . '%')->exists();
        if($query){
            $courses= Course::Where('name', 'like', '%' . $data['course'] . '%')->get();
            return view('frontend.frontend.search',compact('courses'));
        }
        return redirect('find-course')->with('error','Course Not Found');
        return view('frontend.frontend.findcourse')->with('error','Course not Found');

    }

    public function register()
    {
        return view('pages.register');
    }

    public function admin()
    {
        return view('frontend.frontend.admin');
    }

    public function contact()
    {
        return view('pages.contact');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function hire()
    {
        return view('pages.hire');
    }
    public function courses()
    {
        return view('pages.courses');
    }

    public function privacy(){
        return view('pages.privacy');
    }

    public function faq(){
        return view('pages.faq');
    }

    public function findcourse(){
        return view('pages.findcourse');
    }

    public function blog1(){
        return view('pages.blog1');
    }

    public function blog2(){
        return view('pages.blog2');
    }

    public function curriculum(){
        return view('pages.curriculum');
    }

    public function terms(){
        return view('pages.terms');
    }



    public function mycourse($id){
        $check=DB::table('users')->where('id',$id)->exists();

        if($check) {
            $check = DB::table('registered_courses')->where('user_id', $id)->exists();
            if($check) {
                $check = DB::table('registered_courses')->where('user_id', $id)->get();
                $courses = [];
                foreach ($check as $item) {

                    $output = DB::table('courses')->where('id', $item->course_id)->get()[0];

                    array_push($courses, (array)$output);
                }

                return view('frontend.frontend.mycourses',compact('courses'));
            }

            else{
              $message="no registered course";
            }
            $user=DB::table('users')->where('id',$id)->get()[0];
        }
        else{
            $message='user does not exist';
        }

    }

    public function storecontact(){
        $data=request()->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'message'=>'required'
        ]);

        $product = Contact::create($data);
        if($product){
            Session::flash('message', 'your transaction was  succesfull');
            return back()->with('success','Message Sent');
        }

    }
}
