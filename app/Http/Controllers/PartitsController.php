<?php

namespace App\Http\Controllers;


use App\Models\Partits;
use App\Models\Equips;
use Illuminate\Http\Request;

class PartitsController extends Controller
{
    public function index(){
        $partits = Partits::orderby('id', 'desc')->paginate();
        // return $equips;

        return view('partits.index', compact('partits'));
    }
    public function create(){
        $equips = Equips::all();
       
        return view('partits.create', compact("equips"));
    }
    public function create_partits(Request $request){
        
        $request->validate([
            'data_partit'=>'required',
            'hora_partit'=>'required',
            // 'estat'=>'required',
            'equip_local'=>'required',
            'equip_visitant'=>'required'
        ]);

        $partits = new Partits();
        $partits->data_partit = $request->data_partit;
        $partits->hora_partit = $request->hora_partit;
        // $partits->estat = $request->estat;
        $partits->equip_local = $request->equip_local;
        $partits->equip_visitant = $request->equip_visitant;

        $partits->save();
        return redirect()->route('partits.show', $partits);
    }
    public function show(Partits $partits){
       
        return view('partits.show',compact('partits'));
    }
    public function destroy(Partits $partits){
        $partits->delete();
        // return redirect()->route('equips.show', $equips);
        return redirect()->route('partits.index', $partits);
    }
}
