<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::all();
        return view('clients.index', compact("clients"));
    }

    public function create(){
        $client = new Client;
        $client->type = 'person';
        $client->isactive = 1;
        return view('clients.create', compact("client"));
    }

    public function store(Request $request){
        $client = Client::create([
            'identification' => $request->identification,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'type' => $request->type,
            'isactive' => $request->has("isactive"),
        ]);
        return redirect()->route("clients.index");
    }
    
    public function edit($id){
        try {
            $client = Client::findOrfail($id);
            return view('clients.edit',compact("client"));
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }
    
    public function update(Request $request, $id){
        $client = Client::find($id);
        $client->update([
            'identification' => $request->identification,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'type' => $request->type,
            'isactive' => $request->has("isactive"),
        ]);
        return redirect()->route("clients.index");
    }

    public function delete($id){
        try {
            $client = Client::findOrfail($id);
            return view('clients.delete',compact("client"));
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }
    
    public function destroy($id){
        try {
            $client = Client::findOrfail($id);
            $client->delete();
        } catch (\Throwable $th) {
        }
        return redirect()->route("clients.index");
    }
    
    public function show($id){
        try {
            $client = Client::findOrfail($id);
            return view('clients.show',compact("client"));
        } catch (\Throwable $th) {
        }
        return redirect()->route("clients.index");
    }
}
