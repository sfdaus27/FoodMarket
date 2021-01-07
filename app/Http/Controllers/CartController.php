<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Burger;
use App\Models\Cart;
use App\Models\Drink;
use App\Models\Pizza;
use App\Models\Checkout;

class CartController extends Controller
{
    //
    public function create()
    {
        $cart = Cart::where('user_id', auth()->user()->id)->where('status', null)->get();
        $subtotal = Cart::where('user_id', auth()->user()->id)->where('status', null)->sum('subtotal');
        return view('layouts/cart', ['carts' => $cart, 'subtotal' => $subtotal]);
    
        // $user = auth()->user()->id;
        // $cart = Cart::where('user_id',$user)->where('status', null)->get();
        // $subtotal = Cart::where('user_id',$user)->get()->sum('subtotal');
        // return view ('layouts/cart', ['carts' => $cart, 'subtotal' => $subtotal])
    }

    public function store(Request $request, $type,$id)
    {
        $request->validate([]);

        if($type == 'burger')
            $burger = Burger::find($id);
        if($type == 'pizza')
            $pizza = Pizza::find($id);
        if($type == 'drink')
            $drink = Drink::find($id);
        $user = auth()->user()->id;


        $cart = new Cart;
        if ($type == 'burger' && $cart->jenis_makananMinuman = $burger->jenis_burger) {
            # code...
            $cart->jenis_makananMinuman = $burger->jenis_burger;
            $cart->quantity = $request->quantity;
            $cart->harga = $burger->harga;        
            $cart->image = $burger->image;
            $cart->subtotal = $cart->harga * $cart->quantity;
            $cart->total += $cart->subtotal;

            // $cart->status=1;
            $cart->user_id = $user;
            $cart->save();
        } 
        if ($type == 'pizza' && $cart->jenis_makananMinuman = $pizza->jenis_pizza) {
            # code...
            $cart->jenis_makananMinuman = $pizza->jenis_pizza;
            $cart->quantity = $request->quantity;
            $cart->harga = $pizza->harga;        
            $cart->image = $pizza->image;
            $cart->subtotal = $cart->harga * $cart->quantity;
            $cart->total += $cart->subtotal;
            // $cart->status=1;
            $cart->user_id = $user;
            $cart->save();

        } 
        if ($type == 'drink' && $cart->jenis_makananMinuman = $drink->jenis_minuman) {
            # code...
            $cart->jenis_makananMinuman = $drink->jenis_minuman;
            $cart->quantity = $request->quantity;
            $cart->harga = $drink->harga;        
            $cart->image = $drink->image;
            $cart->subtotal = $cart->harga * $cart->quantity;
            $cart->total += $cart->subtotal;
            // $cart->status=1;
            $cart->user_id = $user;
            $cart->save();
        }

        return redirect('/cart')->with(['success', 'Berhasil Ditambah Ke Keranjang']);
    }

    public function destroy($id)
    {
        $cart = Cart::destroy($id);
        return redirect('/cart')->with(['succes', 'Berhasil Di Hapus']);
    }
}
