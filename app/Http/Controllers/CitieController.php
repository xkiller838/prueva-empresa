<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Citie;

class CitieController extends Controller
{
    public function index(){
        return view('city.index');
    }

    public function show(){
       $cities = Citie::orderBy('id','DESC')->paginate(3);
       return view('city.show', compact("cities"));
    }


    public function store(Request $request){

        $citie = new Citie();

        $citie->cod = $request->cod;
        $citie->name = $request->name;

        if($citie->save()){
          return view('city.index');
        }
    }

    public function edit(Request $request){
        $cities = Citie::where('id',$request->id)->firstOrFail();
        return view('city.edit',compact("cities"));
    }

    public function update(Request $request){

        $cities =Citie::where('id',$request->id)->firstOrFail();
        $cities->cod = $request->cod;
        $cities->name = $request->name;

        if($cities->save()){
          return back();
        }

    }

    public function delete(Request $request){
        $cities =Citie::where('id',$request->id)->firstOrFail();
        $cities->delete();
        return back();
    }

}
