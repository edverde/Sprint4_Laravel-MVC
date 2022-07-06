<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entitats;
use App\Models\Equips;
use App\Models\Partits;

class EntitatsController extends Controller
{
    public function index(){
        $entitats = Entitats::orderby('id', 'desc')->paginate();
        
        return view('entitats.index', compact('entitats'));
    }

    public function create(){
        return view('entitats.create');
    }

    public function create_entitats(Request $request){
    //     $request->validate([
    //         'name' => 'required',
    //         'entitat' => 'required'
    //     ]);
        
    //     $equips = new Entitats();
    //     $equips->entitat_id = $request->entitat;
    //     $equips->name = $request->name;
    //     $equips->save();

    //     return redirect()->route('entitats.index');
    }

    public function show(Entitats $entitats){
        return view('entitats.show',compact('entitats'));        
    }

    public function edit(Entitats $entitats){      
        return view('entitats.edit', compact('entitats'));
    }

    public function update(Request $request , Entitats $entitats){        
        // $request->validate([
        //     'name' => 'required',
        //     'entitat' => 'required'
        // ]);
        
        // $entitats->entitat_id = $request->entitat;
        // $entitats->name = $request->name;        
        // $entitats->save();

        // return redirect()->route('entitats.show', $entitats);

    }

    public function destroy(Entitats $entitats){
        $entitats->delete();
        
        return redirect()->route('entitats.index', $entitats);
    }
}
