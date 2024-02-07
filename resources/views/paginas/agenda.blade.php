<x-layout title="">
<form action="/agenda" method="get">

<div class="card-header p-3 mb-2 bg-dark-subtle text-emphasis-dark"><h1>Consultar</h1></div>
    <div class="card-body p-3 mb-2 bg-dark-subtle text-emphasis-dark">

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
    
        <br><br>
        <button type="submit" >Enviar</button>
    </div>
</div>          
        