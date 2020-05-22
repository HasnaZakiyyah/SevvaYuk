<?php

namespace App\Http\Controllers;
use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function transaction()
    {
        return view('pages.transaction.transaction'); 
    }

    public function status()
    {
        return view('pages.status.status'); 
    }

   
    public function save(Request $request)
    {
        $this->validate($request, [
            'pembayaran' => 'required',
            
        ]);
        $transactions = new Transaction();
        $transactions->pembayaran = $request->pembayaran;
        $transactions->save();
        //User::create($user);
        $request->session()->flash('Telah Pilih Pembayaran');
        return view('pages.status.status');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
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
