<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equips;

class EquipsController extends Controller
{
    public function index(){
        $equips = Equips::orderby('id', 'desc')->paginate();
        // return $equips;

        return view('equips.index', compact('equips'));

    }
    public function create(){
        return view('equips.create');
    }
    public function create_equips(Request $request){
        
        $equips = new Equips();
        $equips->entitat_id = $request->entitat;
        $equips->name = $request->name;
       
        // return $request->all();
        // return $equips;
        $equips->save();
        return redirect()->route('equips.show', $equips);
    }
    public function show(Equips $equips){
       
        return view('equips.show',compact('equips'));
    }
    public function edit(Equips $equips){
      
        return view('equips.edit', compact('equips'));
    }
    public function update(REquest $request , Equips $equips){
        $equips->entitat_id = $request->entitat;
        $equips->name = $request->name;
        
        $equips->save();
        return redirect()->route('equips.show', $equips);

    }
}
