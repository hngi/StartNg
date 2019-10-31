<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

=======
use foo\bar;
use Illuminate\Support\Facades\DB;
use App\RegisteredCourse;
use Symfony\Component\HttpFoundation\Session\Flash;
use App\Contact;
use Illuminate\Support\Facades\Session;
use App\Course;
use App\User;
>>>>>>> master
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
    public function registercourse($id){
        $course=User::find($id);
        $course->registercourse=1;
        $course->save();
        session::flash("success",'Registration For the Course Successfully');
        return redirect('/');
    


    }

   
}
