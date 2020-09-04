<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;

class SeriesController extends Controller
{
    public function index(Request $request){
        $series = Serie::all();
        return view('series.index',compact('series'));
    }

    public function create(Request $request){
        return view('series.create');
    }

    public function store(Request $request){
        $nome = $request->nome;
        $serie = new Serie();
        $serie->nome = $nome;
        var_dump($serie->save());
    }
}
