<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('empresa.empleado');
    }

    public function empresas()
    {
        return view('empresa.empresa');
    }

    public function empleados()
    {
        return view('empresa.empleado');
    }
}
