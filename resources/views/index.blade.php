<!doctype html>
<html lang="pt_BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<h1 class="text-center">Cadastro de Usuários</h1> <hr>

<div class="text-center mt-3 mb-4">
    <a href="">
        <button class=" btn btn-success">Cadastrar</button>
    </a>
</div>


<div class="col-8 m-auto ">
    <table class="table text-center">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id </th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">E-mail</th>
            <th scope="col">Perfil</th>
            <th scope="col">Endereço</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>

        @foreach($user as $users)
            @php
            $adress=$user->find($users->id)->relAdress;
            @endphp
            <tr>
                <th scope="row">{{$users->id}}</th>
                <td>{{$users->name}}</td>
                <td>{{$users->cpf}}</td>
                <td>{{$users->email}}</td>
                <td>Perfil  </td>
                <td>Endereço </td>
                <td>
                    <a href="{{url("users/$users->id")}}">
                        <button class="btn btn-dark">Visualizar</button>
                    </a>
                    <a href="">
                        <button class="btn btn-primary">Editar</button>
                    </a>
                    <a href="">
                        <button class=" btn btn-danger">Deletar</button>
                    </a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>
