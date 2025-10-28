<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "{{route ('aluno.store')}}" method="POST">
        @csrf
        <h1>Novo Aluno hihihihi </h1>
        <label>Nome:</label>
        <input type="text" name="nome">
        <br>
        <br>
        <label>Curso:</label>
        <input type="text" name="curso">
        <br>
        <br>
        <label>Ano:</label>
        <input type="integer" name="ano">
        <br>
        <br>
        <input type="submit" name="Savar">
    </form>
</body>
</html>