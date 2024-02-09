<x-layout title="Formulario Cadastro">

<form class="container" action="/cadastrar/salvar" method="POST">
    <div class="col">
    <div class="card p-3 mb-2 bg-dark-subtle text-emphasis-dark mb-3 position-absolute top-100 start-50 translate-middle"
    style="max-width: 50 rem;" >
        
    <div class="card-header p-3 mb-2 bg-dark-subtle text-emphasis-dark">Cadastro</div>
    <div class="card-body p-3 mb-2 bg-dark-subtle text-emphasis-dark">

            @csrf <!-- Valida o formulário -->
            <br>
            <label> Nome: </label>
            <input type="text" id="nome" name="nome" placeholder="Informe seu nome" required/><br><br>

            <label> Telefone: </label>
            <input type="text" id="telefone" name="telefone" placeholder="(11)99999-9999" required/><br><br>

            <label>CPF</label><br>
        <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required/>
        <br><br>
        
        <label>Email</label>
        <input type="email"  id="emailUsuario" name="emailUsuario" placeholder="name@example.com" required/>
        <br>

        <label>Senha</label><br>
        <input type="password" id="senha" name="senha" placeholder="Senha" required/>
        <br><br>
      
        <label>Tarefa</label>
        <div class="mb-3">
        <textarea class="form-control" id="adicionarTarefa" name="adicionarTarefa" rows="3" placeholder="Descreva a Tarefa"></textarea>
        </div>
        <br>
        <label>Data que ralizara a tarefa</label>
        <input type="date" id="dataTarefa" name="dataTarefa"  placeholder="Data da tarefa" required/>

        
        <label>  Hora que a tarefa sera realizada</label>
        <input type="time" id="horaTarefa" name="horaTarefa"  placeholder="horaTarefa" required/>
        </div>
        <div align="center">
        <button  class="btn btn-secondary" type="submit"> Cadastrar </button>
            <a class="btn btn-secondary" href="consultar">Consultar</a>
        </div>   
        </form>

</x-layout>








































