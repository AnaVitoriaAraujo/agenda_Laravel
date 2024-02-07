<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastrarUsuarioModel;


class consultarUsuario extends Controller
{
    public function consultar() {
        $dados = cadastrarUsuarioModel::all();
    
        return view('paginas.consultar', compact('dados'));        
    }//Fim do Metodo
}