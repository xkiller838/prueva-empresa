<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Citie;
use App\Client;

class ClientController extends Controller
{
    public function index(){
       $cities = Citie::all();
       return view('client.index', compact("cities"));
    }

    public function show(Request $request){
       $buscar = $request->get("buscar");
       $clients = Client::buscador($buscar)->orderBy('created_at','DESC')->paginate(3);
       return view('client.show', compact("clients"));
    }

     public function edit(Request $request){
        $cities = Citie::all();
        $clients = Client::where('id',$request->id)->firstOrFail();
        return view('client.edit', compact("clients","cities"));
    }

    public function update(Request $request){

        $clients =Client::where('id',$request->id)->firstOrFail();
        $clients->city = $request->city;
        $clients->cod = $request->cod;
        $clients->name = $request->name;

        if($clients->save()){
          return back();
        }

    }

    public function store(Request $request){
        $clients = new Client();

        $clients->city = $request->city;
        $clients->cod = $request->cod;
        $clients->name = $request->name;

        if($clients->save()){
          return back();
        }
    }

     public function delete(Request $request){
        $clients =Client::where('id',$request->id)->firstOrFail();
        $clients->delete();
        return back();
    }
}
