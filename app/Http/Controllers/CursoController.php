<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view('cursos.index');
    }
    

    public function create(){
        return view('cursos.create');
    }

    public function show($curso){
        return view('cursos.show',['curso' => $curso]);
        
        //elnombre del array tiene que ser igual a la variable definida en show.php, se podría usar el método compact('curso') en el caso de que la variable tenga el mismo nombre. ej:

        // return view('cursos.show', compact('curso') );
    }
}
