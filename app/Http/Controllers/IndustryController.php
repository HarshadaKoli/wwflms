<?php

namespace App\Http\Controllers;

use App\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('createindustry');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function create(Request $request)
    {
    	$industry = new Industry();

		 $industry->id = $request->input('id');
		 $industry->industry_name = $request->input('industry_name');
	 $industry->save();
      return redirect('industryall');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function all(Request $request)
    {
        $industry = Industry::all();
        return view('industryall')->with(compact('industry'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
             $industry = Industry::find($id);
        return view('viewindustry')->with(compact('industry'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $industry = Industry::find($id);
        return view('editindustry')->with(compact('industry'));
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
        $industry = Industry::find($request->input('id'));

		 $industry->id = $request->input('id');
		 $industry->industry_name = $request->input('industry_name');
	 $industry->save();
        return redirect('industryall');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $industry = Industry::findOrFail($id);
 
            $industry->delete();
            return redirect('industryall');
    }
}