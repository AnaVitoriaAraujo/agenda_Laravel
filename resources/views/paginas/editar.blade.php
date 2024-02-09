<x-layout title="Editar">
<div class="p-3 mb-2 bg-dark-subtle text-emphasis-dark">
    <form action="../atualizar/{{$dado->id}}" method="get" align="center">
    <br><br><br><br><br>
    <h2>Editar Usuário</h2>
    <br><br>
        <label> Id: </label>
        <input type="number" id="id" name="id" value="{{$dado->id}}" disabled required/><br><br>

        <label> Nome: </label>
        <input type="text" id="nome" name="nome" value="{{$dado->nome}}" required/> 
        <label>   Telefone: </label>
        <input type="text" id="telefone" name="telefone" value="{{$dado->telefone}}" required/><br><br>

        <label> Email: </label>
        <input type="email" id="emailUsuario" name="emailUsuario" value="{{$dado->emailUsuario}}" required/>

        <label> Data da Tarefa: </label>
        <input type="date" id="dataTarefa" name="dataTarefa" value="{{$dado->dataTarefa}}" required/><br><br>

        <label> Hora da Tarefa: </label>
        <input type="time" id="horaTarefa" name="horaTarefa" value="{{$dado->horaTarefa}}" required/><br><br>

        <button class="btn btn-secondary" type="submit">Atualizar</button>
        <a class="btn btn-secondary" href="../cadastrar">Voltar</a>           
        <!-- Botão Excluir com modal -->
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Excluir
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Aviso!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tem certeza que deseja excluir este usuário!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                <a type="button" class="btn btn-primary" href="/excluir/{{$dado->id}}">Sim</a>
            </div>
            </div>
        </div>
        </div>
        <br><br><br><br><br><br><br><br>
    </div>
        <!-- fim do div da modal -->
    </form>
</x-layout>