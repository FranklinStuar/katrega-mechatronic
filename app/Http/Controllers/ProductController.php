<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::where('type',"p")->get();
        return view('products.index', compact("products"));
    }

    public function create(){
        $product = new Product;
        $product->code = "mc".Product::count();
        $product->cost = 0;
        $product->price = 0;
        $product->stock = 0;
        $product->tax = 1;
        $product->sale_stock_null = 1;
        $product->measurement = "Unidad";
        $product->purchase = 1;
        $product->sale = 1;
        $product->isactive = 1;
        return view('products.create', compact("product"));
    }

    public function store(Request $request){
        $product = Product::create([
            'code' => $request->code,
            'barcode' => $request->barcode,
            'name' => $request->name,
            'tax' => $request->has("tax"),
            'sale_stock_null' => $request->has("sale_stock_null"),
            'presentation' => $request->presentation,
            'measurement' => $request->measurement,
            'package' => $request->package,
            'stock' => $request->stock,
            'type' => "p",
            'purchase' => $request->has("purchase"),
            'sale' => $request->has("sale"),
            'cost' => $request->cost,
            'price' => $request->price,
            'isactive' => $request->has("isactive"),
            'comments' => $request->comments,
        ]);
        return redirect()->route("products.index");
    }
    
    public function edit($id){
        try {
            $product = Product::findOrfail($id);
            return view('products.edit',compact("product"));
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }
    
    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->update([
            'code' => $request->code,
            'barcode' => $request->barcode,
            'name' => $request->name,
            'tax' => $request->has("tax"),
            'sale_stock_null' => $request->has("sale_stock_null"),
            'presentation' => $request->presentation,
            'measurement' => $request->measurement,
            'package' => $request->package,
            'stock' => $request->stock,
            'type' => "p",
            'purchase' => $request->has("purchase"),
            'sale' => $request->has("sale"),
            'cost' => $request->cost,
            'price' => $request->price,
            'isactive' => $request->has("isactive"),
            'comments' => $request->comments,
        ]);
        return redirect()->route("products.index");
    }

}
