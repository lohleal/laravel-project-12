<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listagem de Alunos</h1>
    <a href="{{route('aluno.create')}}">Novo Aluno</a>

    <table style="border: 1px solid black;"> 

        <thead>
            <th>NOME</th>
            <th>TURMA</th>
            <th>ANO</th>
            <th>AÇÕES</th>
        </thead>

        <tbody>
            @foreach ($alunos as $item)
                <tr>
                    <td>{{$item->nome}}</td>
                    <td>{{$item->curso}}</td>
                    <td>{{$item->ano}}</td>
                    <td>
                        <a href="{{route('aluno.edit', $item->id)}}">Aterar</a>
                        <form action="{{route('aluno.destroy', $item->id)}}" method="POST" style= "display: inline;">
                            @csrf
                            @method('delete')
                            <input type="submit" value="remover">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    
    </table>
    
</body>
</html>