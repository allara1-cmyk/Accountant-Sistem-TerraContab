<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TerrenosController extends Controller
{
    public function index()
    {
        // Más adelante aquí podrás traer datos reales desde la BD.
        return view('lotes.index');
    }
}
