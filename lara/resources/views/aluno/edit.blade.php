<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "{{route ('aluno.update', $aluno->id)}}" method="POST">
        @csrf
        @method('PUT')
        <h1>Alterar Aluno</h1>
        <label>Nome:</label>
        <input type="text" name="nome" value="{{$aluno->nome}}">
        <br>
        <br>
        <label>Curso:</label>
        <input type="text" name="curso" value="{{$aluno->curso}}">
        <br>
        <br>
        <label>Ano:</label>
        <input type="integer" name="ano" value="{{$aluno->ano}}">
        <br>
        <a href="{{route('aluno.index')}}">Voltar</a>      
        <br>
        <input type="submit" name="Salvar">
        <br>

    </form>
</body>
</html>