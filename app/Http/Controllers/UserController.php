<?php

namespace App\Http\Controllers;

use foo\bar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Symfony\Component\HttpFoundation\Session\Flash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show(){
        $users = DB::table('users')->get();

        return view('frontend.frontend.users',compact('users'));
    }
    public function user($id){
        $check=DB::table('users')->where('id',$id)->exists();

        if($check) {
            $check = DB::table('registered_courses')->where('user_id', $id)->exists();
            if($check) {
                $check = DB::table('registered_courses')->where('user_id', $id)->get();
                $courses = [];
                foreach ($check as $item) {

                    $output = DB::table('courses')->where('id', $item->course_id)->value('name');

                    array_push($courses, $output);
                }
            }


            else{
                $courses=array('no course registered');
            }


            $user=DB::table('users')->where('id',$id)->get()[0];


        }
        else{

        }
        return view('frontend.frontend.user_detail',compact('user','courses'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if (empty($user)) {
            Flash::error('User not found');
            return redirect(route('users.index'));
        }

        $user->active = ($user->active == 0) ? 1 : 0;
        $title = ($user->active == 1) ? "enabled" : "disabled";


        $user->save();
//        Flash::success("User has been $title successfully.");
        return redirect(route('users'));
    }
    public function disableAdmin($id)
    {
        $user = User::find($id);
        if (empty($user)) {

            return back()->with('error','User Does not exist');
        }

        $user->role = ($user->role == 0) ? 1 : 0;
        $title = ($user->role == 1) ? "enabled" : "disabled";


        $user->save();
//        Flash::success("User has been $title successfully.");
        return back()->with('success','User has been '.$title.' succesfully');

    }
}
