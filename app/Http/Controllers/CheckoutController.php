<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware();
    }
    public function index()
    {
        return view('checkout');
    }
    public function stripe(){
        return view('stripe');
    }
}
