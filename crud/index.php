<?php include 'menu.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRUD</title>
</head>

<body>
    <!-- Formulário para cadastro de usuários -->
    <!-- Início formulário -->
    <div class="container col-md-6">
        <h1>Cadastro de dados</h1>
        <form action="salvar.php" method="post" class="form-control">
            <div class="row">
                <div class="col-sm">
                    <label>Nome:</label>
                    <input type="text" name="nome" id="" class="form-control" required>
                </div>

                <div class="col-sm">
                    <label>Telefone:</label>
                    <input type="tel" name="telefone" id="" class="form-control" required>
                </div>
                <div class="col-sm">
                    <label>CPF:</label>
                    <input type="text" name="cpf" id="cpf" class="form-control" oninput="mascaraCPF('cpf')" required>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
    <!-- Final do formulário -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>