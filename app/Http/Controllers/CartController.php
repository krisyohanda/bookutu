<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\Cart;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
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
        return view('cart');
    }

    public function cart(Request $request, $id)
    {
        $book = Book::where('id', $id)->first();
        $tanggal = Carbon::now();

        //validasi apakah melebihi stok
        if ($request->order_quantity > $book->stok) {
            Alert::error('Error', 'Failed to add cart!');
            return redirect('detail/' . $id)->with('error', 'Failed to add cart!');
        }

        //cek validasi
        $check_checkout = Checkout::where('user_id', Auth::user()->id)->where('status', 0)->first();
        if (empty($check_checkout)) {
            //Simpan ke db checkout
            $checkout = new Checkout;
            $checkout->user_id = Auth::user()->id;
            $checkout->status = 0;
            $checkout->tanggal = $tanggal;
            $checkout->jumlah_harga = 0;
            $checkout->kode = mt_rand(10000, 99999);
            $checkout->save();
        }


        //Simpan ke db checkout
        $new_checkout = Checkout::where('user_id', Auth::user()->id)->where('status', 0)->first();

        //cek cart
        $check_cart = Cart::where('book_id', $book->id)->where('carts_id', $new_checkout->id)->first();
        if (empty($check_checkout)) {
            $cart = new Cart;
            $cart->book_id = $book->id;
            $cart->carts_id = $new_checkout->id;
            $cart->jumlah = $request->order_quantity;
            $cart->jumlah_harga = $book->harga * $request->order_quantity;
            $cart->save();
        } else {
            $cart = Cart::where('book_id', $book->id)->where('carts_id', $new_checkout->id)->first();
            $cart->jumlah = $cart->jumlah + $request->order_quantity;

            //harga sekarang
            $harga_new_cart = $book->harga * $request->order_quantity;
            $cart->jumlah_harga =  $cart->jumlah_harga + $harga_new_cart;
            $cart->update();
        }
        //jumlah total
        $checkout = Checkout::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $checkout->jumlah_harga = $checkout->jumlah_harga+$book->harga * $request->order_quantity;
        $checkout->update();
        
        return redirect('cart')->with('success', 'Success add to cart');
    }

    public function checkout()
    {
        $checkout= Checkout::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $carts = [];
        if(!empty($checkout))
        {
            $carts = Cart::where('carts_id', $checkout->id)->get();
        }

        return view('cart', compact('checkout', 'carts'));
    }

    public function confirm()
    {
        $user = User::where('id', Auth::user()->id)->first();

        if(empty($user->alamat))
        {
            Alert::error('Error', 'failed to checkout, please complete your information');
            return redirect('profile');
        }
        if(empty($user->nomor_telepon))
        {
            Alert::error('Error', 'failed to checkout, please complete your information');
            return redirect('profile');
        }
        
        $checkout = Checkout::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $checkout_id = $checkout->id;
        $checkout->status = 1;
        $checkout->update();

        $carts = Cart::where('carts_id', $checkout_id)->get();
        foreach($carts as $cart){
            $book = Book::where('id', $cart->book_id)->first();
            $book->stok = $book->stok-$cart->jumlah;
            $book->update();
        }

        Alert::Success('Success', 'successfully ordered!');
        return redirect('checkout/'.$checkout_id);
    }

    public function delete($id)
    {
        $cart = Cart::where('id', $id)->first();

        $checkout = Checkout::where('id', $cart->carts_id)->first();
        $checkout->jumlah_harga = $checkout->jumlah_harga-$cart->jumlah_harga;
        $checkout->update();
        
        $checkout->delete();
        
        Alert::error('Success', 'successfully deleted!');
        return redirect('cart');
    }
}
