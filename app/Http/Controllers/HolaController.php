<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    public function index(){

        $hola="Hola mundo !!!! como estan??
        ya hice mi primera mini prueba!";
        return view("Welcome", compact("hola"));
    }
}
