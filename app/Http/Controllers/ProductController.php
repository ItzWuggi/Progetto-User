<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use GuzzleHttp\Handler\Proxy;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function store(ProductRequest $request)
    {
        $name = $request->name;
        $description = $request->description;
        $price = $request->price;
        $img = null;
     

        if($request->file('img')){
            $img = $request
            ->file('img')
            ->store('public/img');
        }

        
        Product::create([
            "name"=>$name,
            "description"=>$description,
            "price"=>$price,
            "img"=>$img
        ]);

        return redirect()->back()->with('message', 'Prodotto inserito correttamente');
    }

    public function create(){
        return view ('product.create');
    }

    public function index(){

        $products = Product::all();
        
        return view("product.index", ["products"=>$products]);
    }
}
