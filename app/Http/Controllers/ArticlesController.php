<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
        //return 'Cargando articulos';
        return view('articles.index', ['user' => 'Bernardo']);
    }

    public function getCreate(){
        return view('form');
    }

    public function Create(){
        return view('form');
    }
}
