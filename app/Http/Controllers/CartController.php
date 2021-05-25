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

    public function add(Request $request){
        if(session('cart') !== null){
            $temp_arr = session('cart');
            $temp_arr[] = [$request->id, $request->count];
            session(['cart'=>$temp_arr]);
        }elseif(session('cart')===null){
            $temp_arr = [[$request->id, $request->count]];
            session(['cart'=>$temp_arr]);
        }
        return response()->json([
            'cart' => session('cart')
        ]);
    }

    public function remove($product_id){
        $cart = session('cart');
        $index = 0;
        foreach($cart as $arr){
            if (($key = array_search($product_id, $arr)) !== false) {
                unset($cart[$index]);
                $cart = array_values($cart);
            }
            $index+=1;
        }
        session(['cart' => $cart]);
        session()->save();
        return redirect('cart');
    }

    public function destroy(){
        session()->forget('cart');
        session()->save();
        return redirect('cart');
    }
}
