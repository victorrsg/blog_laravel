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
        return view('cursos.show', compact('curso') );       // funcion compact -- primer valor es el nombre de la variable a pasar a la vista
                                                                            // y el segundo la variable que recibe la funcion: ['curso'=>$curso]
    }
}
