<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lista de Tarefas</title>
</head>
<body>
    
    <form action="/atualizar-tarefa/{{$tarefa->id}}" method="POST">
        @csrf
        @method("PUT")
        <div class="titulo">
            <label for="titulo"> Título: </label>
            <input type="text" name="titulo_tarefa" value="{{$tarefa->titulo}}">
        </div>
        <br/>
        <div class="descricao">
            <label for="desc">Descrição: </label>
            <input type="desc" name="descricao_tarefa" value="{{$tarefa->descricao}}">
        </div>
        <br/>
        <div class="data">
            <label for="data">Data: </label>
            <input type="date" name="data_tarefa" value="{{$tarefa->data}}">
        </div>
        <br/>
        <button type="submit" class="btn-atualizar">Atualizar Tarefa</button>
    </form>
    
</body>
</html>
