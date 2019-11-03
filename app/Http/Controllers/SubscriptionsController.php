<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subscription;
use NewsLetter;

class SubscriptionsController extends Controller
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
        //return view('pages.about');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        	'email' => 'required'
        ]);

        $subscriber = new Subscription;
        $subscriber->email = $request->input('email');

        //$subrciber = new Subscription;
        //$subriber = Subriction::firstOrCreate(['email' => 'povilas@laraveldaily.com'], 
  //['first_name' => 'Povilas', 'last_name' => 'Korop']);
		
		if (!Newsletter::isSubscribed($request->email)) {
			Newsletter::subscribePending($request->email);
			//$subcriber->email = $request->input('email');
	        $subscriber->save();
	        	return redirect('/')->with('success', 'Check your email to confirm subscription.');
	        } else {
	        	 return redirect('/')->with('failure', 'You are already subscribed.');
	        }

	          
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
        //
    }
}
