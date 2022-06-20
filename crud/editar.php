<?php
include 'menu.php';
include 'editarbd.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>

<body>
    <!-- Início formulário -->
    <div class="container col-md-6">
        <h1>Editar dados</h1>
        <form action="" method="post" class="form-control">
            <div class="row">
                <div class="col-sm">
                    <label>Nome:</label>
                    <input type="text" name="nome" class="form-control" value="<?php echo $nome; ?>">
                </div>

                <div class="col-sm">
                    <label>Telefone:</label>
                    <input type="tel" name="telefone" class="form-control" value="<?php echo $telefone; ?>">
                </div>
            </div>
            <br>
            <button name="editar" type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>
    <!-- Final do formulário -->
</body>

</html>