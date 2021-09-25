<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ServiceController extends Controller
{
    public function index(){
        $services = Product::where('type',"s")->get();
        return view('services.index', compact("services"));
    }

    public function create(){
        $service = new Product;
        $service->code = "mc0".(Product::count()+1);
        $service->cost = 0;
        $service->price = 0;
        $service->tax = 1;
        $service->measurement = "Poyecto";
        $service->purchase = 1;
        $service->sale = 1;
        $service->isactive = 1;
        return view('services.create', compact("service"));
    }

    public function store(Request $request){
        $service = Product::create([
            'code' => $request->code,
            'name' => $request->name,
            'tax' => $request->has("tax"),
            'measurement' => $request->measurement,
            'package' => $request->package,
            'type' => "s",
            'purchase' => $request->has("purchase"),
            'sale' => $request->has("sale"),
            'cost' => $request->cost,
            'price' => $request->price,
            'isactive' => $request->has("isactive"),
            'comments' => $request->comments,
        ]);
        \Session::flash('success', 'Servicio agregado correctamente');
        return redirect()->route("services.index");
    }
    
    public function edit($id){
        try {
            $service = Product::findOrfail($id);
            return view('services.edit',compact("service"));
        } catch (\Throwable $th) {
                \Session::flash('error', $th->getMessage());
            return redirect()->back();
        }
    }
    
    public function update(Request $request, $id){
        $service = Product::find($id);
        $service->update([
            'code' => $request->code,
            'name' => $request->name,
            'tax' => $request->has("tax"),
            'measurement' => $request->measurement,
            'purchase' => $request->has("purchase"),
            'sale' => $request->has("sale"),
            'cost' => $request->cost,
            'price' => $request->price,
            'isactive' => $request->has("isactive"),
            'comments' => $request->comments,
        ]);
        \Session::flash('success', 'Servicio actualizado correctamente');
        return redirect()->route("services.index");
    }

    public function delete($id){
        try {
            $service = Product::findOrfail($id);
            return view('services.delete',compact("service"));
        } catch (\Throwable $th) {
            \Session::flash('error', $th->getMessage());
            return redirect()->back();
        }
    }
    
    public function destroy($id){
        try {
            $service = Product::findOrfail($id);
            $service->delete();
            \Session::flash('success', 'Servicio eliminado correctamente');
        } catch (\Throwable $th) {
            \Session::flash('error', $th->getMessage());
        }
        return redirect()->route("services.index");
    }
    
    public function show($id){
        try {
            $service = Product::findOrfail($id);
            return view('services.show',compact("service"));
        } catch (\Throwable $th) {
            \Session::flash('error', $th->getMessage());
        }
        return redirect()->route("services.index");
    }
}
