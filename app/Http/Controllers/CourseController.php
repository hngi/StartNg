<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        $courses = DB::table('courses')->get();
        return view('frontend.frontend.admin-courses',compact('courses'));
    }

    public function create(){
        return view('frontend.frontend.add-courses');
    }

    public function store(){
        $data=request()->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'duration'=>'required'
        ]);

        $result=auth()->user()->course()->create($data);

        return back()->with('success','Course Successfully Created');

    }

    public function search(){
        $data= request()->validate([
            'course'=>'required'
        ]);

       $query= Course::Where('course', 'like', '%' . Input::get('course') . '%')->get();

        dd($query);

    }

    public function course($id){
        $check=DB::table('courses')->where('id',$id)->exists();


        if($check){
            $course=DB::table('courses')->where('id',$id)->get()[0];

            return view('frontend.frontend.course_detail',compact('course'));
        }
        else{

        }
    }

    public function destroy($id)
    {
        $course = Course::find($id);
        if (empty($course)) {
            Flash::error('User not found');
            return redirect(route('users.index'));
        }

        $course->active = ($course->active == 0) ? 1 : 0;
        $title = ($course->active == 1) ? "enabled" : "disabled";


        $course->save();
//        Flash::success("User has been $title successfully.");
        return redirect(route('courses'));
    }


}
