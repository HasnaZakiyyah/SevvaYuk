<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() 
    {
        $shops = Shop::with('category')->get();
        return view('pages.home.index')->with('shops', $shops);
    }

    public function search(Request $request) 
    {
        return view('pages.transaction.transaction');
        
    }
}
