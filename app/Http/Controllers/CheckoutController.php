<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::with('product')->get();
        return view('pages.checkout.index')->with('carts', $carts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order;
        $order->user_id = Auth::user()->id;
        $order->amount = $request->amount;
        $order->note = $request->note;
        $order->status_id = 1;
        $order->recipient_name = $request->recipient_name;
        $order->recipient_address = $request->recipient_address;
        $order->recipient_city = $request->recipient_city;
        $order->recipient_province = $request->recipient_province;
        $order->recipient_postalcode = $request->recipient_postalcode;
        $order->recipient_phone = $request->recipient_phone;
        $order->save();

        $carts = Cart::where('user_id', Auth::user()->id)->get();
        for ($i = 0; $i < $carts->count(); $i++) { 
            $orderDetail = new OrderDetail;
            $orderDetail->order_id = $order->id;
            $orderDetail->product_id = $carts[$i]->product_id;
            $orderDetail->quantity = $carts[$i]->quantity;
            $orderDetail->save();

            $carts[$i]->delete();
        }

        return view('pages.transaction.transaction');
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
