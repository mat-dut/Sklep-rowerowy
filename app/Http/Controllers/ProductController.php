<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
{
    public function index(Request $request, $category=''){
        if ($request->method() == 'GET'){
            if(session('category') !== null){
                $products = Product::where('kategoria', session('category'))->orderBy('id', 'asc')->get();
            }
            else{
                $products = Product::select('*')->orderBy('id', 'asc')->get();
            }
            return view('products.products', [
                'products' => $products
            ]);

        }elseif($request->method() == 'POST'){
            if($request->kategoria == 'Wszystkie'){
                session()->forget('category');
                return redirect('/');
            }
            else{
                session(['category' => $request->kategoria]);

                $products = Product::where('kategoria', $request->kategoria)->orderBy('id', 'asc')->get();

                return view('products.products', [
                    'products' => $products
                ]);
            }
        }
    }

    public function show($product_id){
        $product = Product::find($product_id);

        return view("products.product", [
            'product' => $product
        ]);
    }

    public function create_product(){

        return view('products.create');
    }

    public function create(Request $request){

        $product = new Product($request->all());
        $image = $request->file('image')->store('', 'google');
        $product->zdjecie = Storage::disk('google')->getMetadata($image)['path'];
        $product->save();

        session(['alertNoti' => true]);

        return redirect('products_table');
    }

    public function products_table(Request $request){

        if ($request->method() == 'GET'){
            if(session('category') !== null){
                $products = Product::where('kategoria', session('category'))->orderBy('id', 'asc')->get();
            }else{
                $products = Product::select('*')->orderBy('id', 'asc')->get();
            }
            $columns = Schema::getColumnListing('products');
            return view('products.products_table', [
                'products' => $products,
                'columns' => $columns
            ]);

        }elseif($request->method() == 'POST'){
            if($request->kategoria == 'Wszystkie'){
                session()->forget('category');
                return redirect('products_table');
            }
            else{
                session(['category' => $request->kategoria]);

                $products = Product::where('kategoria', $request->kategoria)->orderBy('id', 'asc')->get();
                $columns = Schema::getColumnListing('products');

                return view('products.products_table', [
                    'products' => $products,
                    'columns' => $columns
                ]);
            }
        }
    }

    public function edit($product_id){
        $product = Product::where('id', $product_id)->first();
        return view('products.edit', [
            'product' => $product
        ]);
    }

    public function update(Request $request){
        $product = Product::find($request->id);
        if($request->file('image')!=null){
            Storage::disk('google')->delete($product->zdjecie);
            $image = $request->file('image')->store('', 'google');
            $product->zdjecie = Storage::disk('google')->getMetadata($image)['path'];
        }
        $product->fill($request->all())->save();
        
        session(['alertNoti' => true]);
        return redirect('products_table');

    }

    public function remove($product_id){
        $product = Product::find($product_id);
        Storage::disk('google')->delete($product->zdjecie);
        $product->delete();

        return redirect('products_table');
    }

    public function search(Request $request, $search_query=''){
        if($request->method()=='GET'){
            if($search_query !== ''){
                $products = Product::whereRaw("upper(nazwa) like upper('%$search_query%')")->get();
                return view('products.products',[
                    'products' => $products
                ]);
            }else{
                return redirect('/');
            }
        }elseif($request->method()=='POST'){
            return redirect("search/$request->searchInput");
        }
    }
}
