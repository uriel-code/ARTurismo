<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comentariosMisiones;

class MisionesController extends Controller
{
    //Agregar Comentario
    public function store(Request $request){
        $request->validate([
            'Nombre'=>'required|min:4',
            'Comentario'=>'required|min:1',
            
        ]);

        $comentM = new comentariosMisiones();
        $comentM->nombreUsario=$request->Nombre;
        $comentM->descComentario=$request->Comentario;
        $comentM->save();
        return redirect()->route('addComentario')->with('success','Comentario enviado');
    }

    //Mostrar Comentarios
    public function Comentarios(){
       $comentM=comentariosMisiones::all();
       return view('MonumentoMisiones',compact('comentM'));
    }
}
