<?php

namespace App\Http\Controllers;

use App\Purpose;
use Illuminate\Http\Request;

class PurposeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('createpurpose');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function create(Request $request)
    {
    	$purpose = new Purpose();

		 $purpose->id = $request->input('id');
		 $purpose->purpose_name = $request->input('purpose_name');
	 $purpose->save();
      return redirect('purposeall');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function all(Request $request)
    {
        $purpose = Purpose::all();
        return view('purposeall')->with(compact('purpose'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
             $purpose = Purpose::find($id);
        return view('viewpurpose')->with(compact('purpose'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $purpose = Purpose::find($id);
        return view('editpurpose')->with(compact('purpose'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $purpose = Purpose::find($request->input('id'));

		 $purpose->id = $request->input('id');
		 $purpose->purpose_name = $request->input('purpose_name');
	 $purpose->save();
        return redirect('purposeall');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $purpose = Purpose::findOrFail($id);
 
            $purpose->delete();
            return redirect('purposeall');
    }
}