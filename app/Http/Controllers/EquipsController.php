<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entitats;
use App\Models\Equips;
use App\Models\Partits;


class EquipsController extends Controller
{
    public function index(){
        $equips = Equips::orderby('id', 'desc')->paginate();
        
        
        $entitats = Equips::join('entitats','equips.entitats_id','=','entitats.id')
        ->select('equips.id as id_equips','equips.name as nom_equip','entitats.nom_club as nom_entitat')
        ->distinct()
        ->get();
       
       
        return view('equips.index', compact('equips', 'entitats'))
        ->with('entitats', $entitats);
    }

    public function create(){
        $entitats= Entitats::all();
        return view('equips.create', compact('entitats'));
    }

    public function create_equips(Request $request){
        $request->validate([
            'name' => 'required|unique:equips,name|max:50',
            'entitat' => 'required'
        ]);
        
        $equips = new Equips();
        $equips->entitats_id = $request->entitat;
        $equips->name = $request->name;
        $equips->save();

        return redirect()->route('equips.index');
    }

    public function show(Equips $equips){
        return view('equips.show',compact('equips'));        
    }

    public function edit(Equips $equips){  
        $entitats= Entitats::all();    
        return view('equips.edit', compact('equips','entitats'));
    }

    public function update(Request $request , Equips $equips){        
        $request->validate([
            'name' => 'required|unique:equips,name|max:50',
            'entitat' => 'required'
        ]);
        
        $equips->entitats_id = $request->entitat;
        $equips->name = $request->name;        
        $equips->save();

        return redirect()->route('equips.index', $equips);

    }

    public function destroy(Equips $equips){
        $equips->delete();
        
        return redirect()->route('equips.index', $equips);
    }
}
