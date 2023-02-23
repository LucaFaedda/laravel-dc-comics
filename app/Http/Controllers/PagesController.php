<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comics;

class PagesController extends Controller
{
    public function index(){
        $listaFooter = config('footer'); 
        $listaIcone = config('icons');
        $listaSocial= config('social');
        return view('welcome', compact('listaFooter', 'listaIcone', 'listaSocial'));
    }
}
