<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equips;
use App\Models\Partits;

class EquipsController extends Controller
{
    public function index(){
        $equips = Equips::orderby('id', 'desc')->paginate();
        
        return view('equips.index', compact('equips'));
    }

    public function create(){
        return view('equips.create');
    }

    public function create_equips(Request $request){
        $request->validate([
            'name' => 'required',
            'entitat' => 'required'
        ]);
        
        $equips = new Equips();
        $equips->entitat_id = $request->entitat;
        $equips->name = $request->name;
        $equips->save();

        return redirect()->route('equips.index');
    }

    public function show(Equips $equips){
        return view('equips.show',compact('equips'));        
    }

    public function edit(Equips $equips){      
        return view('equips.edit', compact('equips'));
    }

    public function update(Request $request , Equips $equips){        
        $request->validate([
            'name' => 'required',
            'entitat' => 'required'
        ]);
        
        $equips->entitat_id = $request->entitat;
        $equips->name = $request->name;        
        $equips->save();

        return redirect()->route('equips.show', $equips);

    }

    public function destroy(Equips $equips){
        $equips->delete();
        
        return redirect()->route('equips.index', $equips);
    }
}
