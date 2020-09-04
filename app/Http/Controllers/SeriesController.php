<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request){
        $series = [
            'Sherlock Holmes',
            'The Blacklist',
            'You'
        ];
        return view('series.index',compact('series'));
    }

    public function create(Request $request){
        return view('series.create');
    }
}
