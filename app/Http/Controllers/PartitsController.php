<?php

namespace App\Http\Controllers;

use App\Models\Entitats;
use App\Models\Equips;
use App\Models\Partits;

use Illuminate\Http\Request;
class PartitsController extends Controller
{
    public function index(){
        
        $partitsJ = Partits::join('equips','equip_local','=','equips.id')
        ->join('equips as equipVisitant','equip_visitant', '=', 'equipVisitant.id')
        ->select(
            'equips.name as nom_local',
            'equipVisitant.name as nom_visitant',
            'partits.data_partit as data',
            'partits.hora_partit as hora',
            'partits.id as id'
        
        )
        ->orderby('data')
        ->get();
        
        return view('partits.index', compact('partitsJ'))->with('partitsJ', $partitsJ);
        
    }

    public function create(){
        $equips = Equips::all();
       
        return view('partits.create', compact("equips"));
    }

    public function create_partits(Request $request){        
        $request->validate([
            'data_partit'=>'required',
            'hora_partit'=>'required',  
            'equip_local'=>'required',
            'equip_visitant'=>'required|different:equip_local'
        ]);
        

        $partits = new Partits();
        $partits->data_partit = $request->data_partit;
        $partits->hora_partit = $request->hora_partit;       
        $partits->equip_local = $request->equip_local;
        $partits->equip_visitant = $request->equip_visitant;      
        $partits->save();

        return redirect()->route('partits.index');
    }

    public function show(Partits $partits){ 
       
        return view('partits.show',compact('partits'));
    }

    public function edit(Partits $partits){        
        $equips = Equips::all();
        
        return view('partits.edit', compact("partits"), compact("equips"));
    }

    public function update(Request $request , Partits $partits){
        $request->validate([
            'data_partit'=>'required',
            'hora_partit'=>'required',
            'equip_local'=>'required',
            'equip_visitant'=>'required|different:equip_local'
        ]);
        
        $partits->data_partit = $request->data_partit;
        $partits->hora_partit = $request->hora_partit;
        $partits->equip_local = $request->equip_local;
        $partits->equip_visitant = $request->equip_visitant;        
        $partits->save();

        return redirect()->route('partits.index');
    }

    public function destroy(Partits $partits){
        $partits->delete();
      
        return redirect()->route('partits.index', $partits);
    }
}
