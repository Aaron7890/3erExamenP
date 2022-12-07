<?php

namespace App\Http\Controllers;
use App\Http\Requests\validadorForm1;

use Illuminate\Http\Request;

class ControladorPaginas extends Controller
{
    function fFormulario(){
        return view('formulario');
    }

    function fConsultar(){
        return view('consultar');
    }

    public function procesarFormulario(validadorForm1 $req){
        return redirect('/formulario')->with('confirmacion','Datos guardados');
    }
}
