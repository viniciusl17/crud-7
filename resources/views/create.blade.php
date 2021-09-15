<!doctype html>
<html lang="pt_BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Crud</title>
</head>
<body>
        <h1 class="text-center">Cadastrar um novo Usuário</h1> <hr>

        <div class="col-8 m-auto ">
            <form name="formCad" id="formCad" method="post" action="{{url("users")}}">
                @csrf
                <label>Nome do Usuário</label>
                <input class="form-control" type="text" name="Nome" id="nome" placeholder="Nome do Usuário:"><br>
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password"><br>
                <label>CPF </label>
                <input class="form-control" type="number" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" name="cpf" id="cpf" placeholder="Digite um CPF válido:"><br>
                <label>E-mail </label>
                <input class="form-control" type="email" name="email" id="email" placeholder="Email do Usuário:"><br>
                <label>Perfil</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Admin</option>
                    <option>User</option>
                    <option>Client</option>
                </select><br>
                <label>Endereço</label>
                <input class="form-control" type="text" name="Nome" id="nome" placeholder="Endereço do Usuário:"><br>
                <input class="btn btn-primary" type="submit" name="Cadastrar">
            </form>

        </div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>
