<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramasController extends Controller
{
    public function index(){
        return view("Programas.listado");
    }
}
