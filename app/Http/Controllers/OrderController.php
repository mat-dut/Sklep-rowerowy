<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    public function index(){
        if(session('cart') !== null){
            $products = Product::select('*')->orderBy('id', 'asc')->get();
            return view('order.order', [
                'products' => $products
            ]);
        }else
            return redirect('/');
    }

    public function create(Request $request){
        $order = new Order($request->all());
        $order->zrealizowane = false;
        $order->save();

        $products = Product::select('*')->orderBy('id', 'asc')->get();

        return view('order.order_confirmation', [
            'imie' => $request->imie,
            'nazwisko' => $request->nazwisko,
            'email' => $request->email,
            'numer_telefonu' => $request->numer_telefonu,
            'adres_dostawy' => $request->adres_dostawy,
            'calosc' => $request->cena,
            'products' => $products
        ]);
    }
}
