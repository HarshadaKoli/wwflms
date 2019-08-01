<?php

namespace App\Http\Controllers;

use App\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('createbank');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function create(Request $request)
    {
    	$bank = new Bank();

		 $bank->id = $request->input('id');
		 $bank->bank_name = $request->input('bank_name');
	 $bank->save();
      return redirect('bankall');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function all(Request $request)
    {
        $bank = Bank::all();
        return view('bankall')->with(compact('bank'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
             $bank = Bank::find($id);
        return view('viewbank')->with(compact('bank'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bank = Bank::find($id);
        return view('editbank')->with(compact('bank'));
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
        $bank = Bank::find($request->input('id'));

		 $bank->id = $request->input('id');
		 $bank->bank_name = $request->input('bank_name');
	 $bank->save();
        return redirect('bankall');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $bank = Bank::findOrFail($id);
 
            $bank->delete();
            return redirect('bankall');
    }
}