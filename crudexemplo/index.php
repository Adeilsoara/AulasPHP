<?php include 'menu.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <div class="container">
        <h1>Cadastrar usuário</h1>
        <form action="salvar.php" method="post">
        <div class="row">
            <div class="col-sm-4">
                <label>Nome:</label>
                <input type="text" name="nome" id="" class="form-control">
            </div>

            <div class="col-sm-4">
                <label>Telefone:</label>
                <input type="text" name="telefone" id="" class="form-control">
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</body>

</html>