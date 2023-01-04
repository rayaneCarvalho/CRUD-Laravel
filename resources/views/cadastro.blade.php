<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <title>Lista de Tarefas</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="p-10 m-0 border-0 bd-example">
    
    <form class="" action="/cadastrar-tarefa" method="POST">
        @csrf
        <div class="col-6">
            <label for="inputTitulo" class="form-label"> Título</label>
            <input type="text" class="form-control" name="titulo_tarefa">
        </div>
        <br/>
        <div class="col-6">
            <label for="desc" class="form-label">Descrição</label>
            <input type="desc" class="form-control" name="descricao_tarefa">
        </div>
        <br/>
        <div class="col-6">
            <label for="data" class="form-label">Data</label>
            <input type="date" class="form-control" name="data_tarefa">
        </div>
        <br/>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar Tarefa</button>
        </div>
    </form>
    
</body>
</html>
