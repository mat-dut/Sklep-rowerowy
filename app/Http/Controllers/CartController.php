<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index(){
        $cart = session('cart');
        $products = Product::select('*')->orderBy('id', 'asc')->get();
        return view('cart.cart', [
            'products' => $products
        ]);
    }

    public function add($product_id){
        if(session('cart') !== null){
            $temp_arr = session('cart');
            $temp_arr[] = $product_id;
            session(['cart'=>$temp_arr]);
        }elseif(session('cart')===null){
            $temp_arr = [$product_id];
            session(['cart'=>$temp_arr]);
        }
        return redirect('cart');
    }

    public function remove($product_id){
        $cart = session('cart');
        if (($key = array_search($product_id, $cart)) !== false) {
            unset($cart[$key]);
        }
        session(['cart' => $cart]);
        session()->save();
        return redirect('cart');
    }

    public function destroy(){
        session()->forget('cart');
        session()->save();
        dd(session('cart'));
    }
}
