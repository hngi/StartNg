<?php

namespace App\Http\Controllers;

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
}
