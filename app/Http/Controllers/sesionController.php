<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

class sesionController extends Controller
{
    public function create(){
        return view("inicio_sesion.sesion");
    }
    public function store(Request $request){
       $request->all();
    }
}
