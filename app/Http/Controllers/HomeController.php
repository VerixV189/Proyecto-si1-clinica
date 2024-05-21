<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()//solo se usa invoke cuando se va a administrar 1 sola ruta
    {
        //return view('welcome');
        return view('home');
    }
}
