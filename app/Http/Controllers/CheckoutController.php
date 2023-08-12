<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cart;
use App\Models\User;
use App\Models\Checkout;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CheckoutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $checkouts = Checkout::where('user_id', Auth::user()->id)->where('status', '!=', 0)->get();

        return view('checkout.index', compact('checkouts'));
    }

    public function detail($id)
    {
        $checkout = Checkout::where('id', $id)->first();
        $carts = Cart::where('carts_id', $checkout->id)->get();

        return view('checkout.detail', compact('checkout', 'carts'));
    }
}
