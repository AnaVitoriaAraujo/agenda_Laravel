<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastrarUsuarioModel;//Importar a classe que eu quero utilizar

class cadastrarUsuario extends Controller
{
    public function index()
    {
        $dados = cadastrarUsuarioModel::all();

        return view('paginas.cadastrar')->With('dados',$dados);
    }//fim do método

    public function store(Request $request){
        $nomeUsuario = $request->input('nome');//coletrando os dados do formulario
        $telefoneUsuario = $request->input('telefone');
        $cpfUsuario = $request->input('cpf');
        $emailUsuario = $request->input('emailUsuario');
        $senha = $request->input('senha');
        $adicionarTarefa =$request->input('adicionarTarefa');
        $dataTarefa =$request->input('dataTarefa');
        $horaTarefa = $request->input('horaTarefa');

        $model = new cadastrarUsuarioModel();
        $model->nome = $nomeUsuario;
        $model->telefone = $telefoneUsuario;
        $model->cpfUsuario = $cpfUsuario;
        $model->emailUsuario = $emailUsuario;
        $model->senha = $senha;
        $model->adicionarTarefa = $adicionarTarefa;
        $model->dataTarefa = $dataTarefa;
        $model->horaTarefa = $horaTarefa;
        $model->save();//armazenar os dados no bd

        return redirect('cadastrar');        
    }//fim do metodo store

    
    public function consultar()
    {
        $ids = cadastrarUsuarioModel::all();

        return view('paginas.consultar', compact('ids'));
    }//fim do método

    public function editar($id)
    {
        $dado = cadastrarUsuarioModel::findOrFail($id);

        return view('paginas.editar', compact('dado'));
    }//fim do método

    public function atualizar(Request $request, $id)
    {
        cadastrarUsuarioModel::where('id',$id)->update($request->all());

        return redirect('consultar');
    }//fim do atualizar

    public function excluir(Request $request, $id)
    {
        cadastrarUsuarioModel::where('id',$id)->delete($request->all());

        return redirect('consultar');
    }//fim do excluir


  
  
}//fim da classe