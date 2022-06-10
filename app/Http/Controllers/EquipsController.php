<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipsController extends Controller
{
    public function index(){
        return view('equips.index');

    }
    public function create(){
        return view('equips.create');
    }
    public function show($curso){
        return view('equips.show',['curso' => $curso]);
    }
}
