<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function index()
    {
        $courses = DB::table('courses')->get();
        return view('pages.index',compact('courses'));
    }
}
