<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;

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

        Mail::to($request->email)->send(new OrderMail(route('see_orders')));
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

    public function see_orders(){
        if(Auth::user() !== null){
            if(Auth::user()->admin){
                $orders = Order::select('*')->orderBy('created_at', 'desc')->get();
            }else{
                $orders = Order::where('email', Auth::user()->email)->orderBy('created_at', 'desc')->get();
            }
            $products = Product::select('*')->orderBy('id', 'asc')->get(); 

            return view('order.see_orders', [
                'orders' => $orders,
                'products' => $products
            ]);
        }
        else{
            return redirect('/');
        }
        
    }
}
