<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacultadController extends Controller
{
    public function index(){
        return view("Faultad.listado");
    }
}
