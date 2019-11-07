<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Schedule;
use App\Courses;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = auth()->user()->role;
        if ($role == 2){
            $user_role = 'admin';
            $courses = Courses::all();
        }
        else{
            return back()->with('error', 'Unauthorized');
        }
        
        return view("$user_role.create-schedule")->with('courses', $courses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $schedule = new Schedule;
        $schedule->date = $request->input('date');
        $schedule->time = $request->input('time');
        $schedule->course_id = $request->input('course');
        $schedule->save();
        
        return back()->with('success','Schedule Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schedule = Schedule::find($id);
        $role = auth()->user()->role;
        if ($role == 2){
            $user_role = 'admin';
            $data = array(
                'courses' => Courses::all(),
                'schedule' => $schedule
            );
        }
        else{
            return back()->with('error', 'Unauthorized');
        }
        
        return view("$user_role.edit-schedule")->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $schedule = Schedule::find($id);
        $schedule->date = $request->input('date');
        $schedule->time = $request->input('time');
        if($request->input('course')){
            $schedule->course_id = $request->input('course');
        }
        $schedule->save();
        
        return back()->with('success','Schedule Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'device';
        $schedule = Schedule::find($id);
        $role = auth()->user()->role;
        if ($role == 2){
            $schedule->delete();
            return back('dashboard')->with('success', 'Schedule Deleted');
        }
        else{
            return back()->with('error', 'Unauthorized');
        }
    }
}
