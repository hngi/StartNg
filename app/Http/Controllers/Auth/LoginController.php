<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
      protected $redirectTo = '/';
    protected function redirectTo()
    {
        $role = Auth::user()->role;
        $email = Auth::user()->email;


        if($email=='admin@gmail.com' || $role==3){
            return route('dashboard');

        }
        if($role==2 || $email=='tutor@gmail.com'){
            return route('tutor.dashboard');

        }

        return  route('index');
//
//        return view('frontend.frontend.admin');

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
}
