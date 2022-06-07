<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartitsController extends Controller
{
    public function index(){
        return view('partits.index');

    }
    public function create(){
        return view('partits.create');
    }
    public function show($curso){
        return view('partits.show',['curso' => $curso]);
    }
}
