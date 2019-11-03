<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Mail;

class ForgotPassController extends Controller
{
    public  function  show(){
        return view('auth.forgot-password');
    }
    public function index(){
        $data=request()->validate([
            'email'=>'required'
        ]);

        $check=DB::table('users')->where('email', $data['email'])->exists();
        if(!$check){
            return back()->with('error','Email Dosent Exist');
        }
        else{
            $user=DB::table('users')->where('email', $data['email'])->get()[0];
            DB::table('password_resets')->insert([
                'email' => $data['email'],
                'token' => Str::random(60), //change 60 to any length you want

            ]);
            $tokenData = DB::table('password_resets')
                ->where('email', $data['email'])->first();
            $token = $tokenData->token;
            $total=['email'=>$data['email'],'code'=>$token];
            Mail::to($data['email'])->send(new TestEmail($total));
            return back()->with('success','A Message has been sent to your email');
        }
    }

    public function sendEmail($user,$code){
        Mail::send(
        'auth.passwords.mail',
            ['user'=>$user,'code'=>$code],
            function ($message) use($user){
                $message->to($user->email);
                $message->subject($user->name);
            }
        );
    }

    public function showPasswordResetForm($email,$token)
    {
        $tokenData = DB::table('password_resets')
            ->where('token', $token)->first();

        Session::put('email',$email);
        Session::put('token',$token);

        if ( !$tokenData ) return redirect()->to('index'); //redirect them anywhere you want if the token does not exist.
        return view('auth.replace-password');
    }

    public function resetPassword(){

        $data=request()->validate([
            'password'=>'required|min:8',
            'confirm_password'=>'required|min:8'
        ]);

        $token=Session::get('token');
        $email=Session::get('email');
        
        if($data['password']!=$data['confirm_password']){
            return back()->with('error','password dosent match');
        }

        $tokenData = DB::table('password_resets')
            ->where('token', $token)->first();

        $user = User::where('email', $email)->first();
        if ( !$user ) return redirect()->to('index'); //or wherever you want

        $user->password = Hash::make($data['password']);
        $user->update(); //or $user->save();

        Auth::login($user);
        DB::table('password_resets')->where('email', $user->email)->delete();
        return redirect()->route('index');
    }


}
