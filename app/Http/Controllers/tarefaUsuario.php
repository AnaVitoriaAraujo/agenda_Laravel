<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgendarTarefa;  //chamando a model 

class tarefaUsuario extends Controller
{
    public function index(){
        $tarefaUsuario = tarefaUsuario::all();

        return view('paginas.agenda');
    }//fim do index


    public function store(Request $request)
    {
        $nomeTarefa = $request->input('nomeTarefa');
        $dataeHora = $request->input('datahora');


        $model = new trefasUsuario();
        $model->nomeTarefa = $nomeTarefa;
        $model->datahora = $dataeHora;
       

        return redirect('/agenda');

    }//fim da função store
}// fim do metodo