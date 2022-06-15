<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equips;

class EquipsController extends Controller
{
    public function index(){
        $equips = Equips::paginate();
        // return $equips;

        return view('equips.index', compact('equips'));

    }
    public function create(){
        return view('equips.create');
    }
    public function show($id){
        $equips = Equips::find($id);
        return view('equips.show',compact('equips'));
    }
}
