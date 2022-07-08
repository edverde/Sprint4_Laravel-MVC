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
        

        return view('entitats.index', compact('entitats',));
    }

    public function create(){
       
        return view('entitats.create');
    }

    public function create_entitats(Request $request){
        $request->validate([
            'nom' => 'required|unique:entitats,nom_club|max:50',
            
        ]);
        
        $entitats = new Entitats();
       
        $entitats->nom_club= $request->nom;
        $entitats->save();

        return redirect()->route('entitats.index');
    }

    public function show(Entitats $entitats){
        // $equips = Entitats::join('equips','id ','=',' entitats_id ')
        // ->where('entitats.id','=',$entitats->id)->get();
        return view('entitats.show',compact('entitats'));        
    }

    public function edit(Entitats $entitats){    
          
        return view('entitats.edit', compact('entitats'));
    }

    public function update(Request $request , Entitats $entitats){        
        $request->validate([
            'nom' => 'required|unique:entitats,nom_club|max:50',
          
        ]);
        
        
        $entitats->nom_club = $request->nom;        
        $entitats->save();

        return redirect()->route('entitats.index', $entitats);

    }

    public function destroy(Entitats $entitats){
        $entitats->delete();
        
        return redirect()->route('entitats.index', $entitats);
    }
}
