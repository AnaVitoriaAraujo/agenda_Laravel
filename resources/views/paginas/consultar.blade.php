<x-layout title="">
<form action="/consultar" method="get">

<div class="card-header p-3 mb-2 bg-dark-subtle text-emphasis-dark"><h5>Consultar</h5></div>
    <div class="card-body p-3 mb-2 bg-dark-subtle text-emphasis-dark">

                 @foreach($dados as $dado)
                 <h5>Nome do usuario:</h5>
                 <li class="list-group-item">{{$dado->nome}}</li> 
                 @endforeach
            </div>
        

             <div class="p-3 mb-2 bg-secondary text-white">
                    @foreach($dados as $dado)
                    <h5>Telefone:</h5>
                    <li class="list-group-item">{{$dado->telefone}}</li> 
                    @endforeach
             </div>
             
  
             <div class="p-3 mb-2 bg-dark-subtle text-emphasis-dark">   
                @foreach($dados as $dado)
                <h5>CPF:</h5>
                      <li class="list-group-item">{{$dado->cpfUsuario}}</li> 
                @endforeach
            </div>

            <div class="p-3 mb-2 bg-secondary text-white">
                @foreach($dados as $dado)
                <h5>Email:</h5>
                         <li class="list-group-item">{{$dado->emailUsuario}}</li> 
                @endforeach
            </div>

            <div class="p-3 mb-2 bg-dark-subtle text-emphasis-dark">
                @foreach($dados as $dado)
                <h5>Senha:</h5>
                         <li class="list-group-item">{{$dado->senha}}</li> 
                @endforeach
            </div>
                
            <div class="p-3 mb-2 bg-secondary text-white"> 
                @foreach($dados as $dado)
                <h5>Tarefa:</h5>
                <li class="list-group-item">{{$dado->adicionarTarefa}}</li>  
                @endforeach
             </div>
                
             <div class="p-3 mb-2 bg-dark-subtle text-emphasis-dark">
                @foreach($dados as $dado)
                <h5>Data da Tarefa:</h5>
                         <li class="list-group-item">{{$dado->dataTarefa}}</li> 
                @endforeach
            </div>

            <div class="p-3 mb-2 bg-secondary text-white"> 
                @foreach($dados as $dado)
                <h5>Hora da Tarefa:</h5>
                <li class="list-group-item">{{$dado->horaTarefa}}</li>  
                @endforeach
            </div>
</div>
</div>          
            
   
</div>
</x-layout>
