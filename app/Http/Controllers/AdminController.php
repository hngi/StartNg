<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mentors = User::where('role', '1')->get();
        return view('admin.mentors')->with('mentors', $mentors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.create-mentor');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ]);

        $mentor = new User;
        $mentor->name = $request->input('name');
        $mentor->email = $request->input('email');
        $mentor->phone = $request->input('phone');
        $mentor->password = Hash::make($request->input('password'));
        $mentor->role = 1;
        $mentor->state = $request->input('phone');
        $mentor->save();

        return back()->with('success','Mentor Successfully Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mentor = User::find($id);
        return view('admin.mentor_detail')->with('mentor', $mentor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mentor = User::find($id);
        if (empty($mentor)) {
            Flash::error('Mentor not found');
            return redirect(route('mentors.index'));
        }

        $mentor->active = ($mentor->active == 0) ? 1 : 0;
        $title = ($mentor->active == 1) ? "enabled" : "disabled";


        $mentor->save();
//        Flash::success("User has been $title successfully.");
        return redirect(route('mentors'));
    }
}
