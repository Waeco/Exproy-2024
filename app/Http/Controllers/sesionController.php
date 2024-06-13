<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sesionController extends Controller
{
    public function sesion(){
        return view("inicio_sesion.sesion");
    }
}
