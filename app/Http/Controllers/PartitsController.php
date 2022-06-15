<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partits;

class PartitsController extends Controller
{
    public function index(){
        return view('partits.index');

    }
    public function create(){
        return view('partits.create');
    }
    public function show($id){

        $partits = Partits::find($id);

        return view('partits.show',compact('partits'));
    }
}
