<?php
include 'menu.php';
include 'listar.php';
include 'editarbd.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar dados</title>
</head>

<body>
    <div class="container col-md-6">
        <h1>Listagem dos dados</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <?php while ($usuario = mysqli_fetch_assoc($listarDados)) { ?>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $usuario['id_usuario']; ?></th>
                        <td><?php echo $usuario['nome']; ?></td>
                        <td><?php echo $usuario['telefone']; ?></td>
                        <td>
                            <a href="editar.php?id_usuario=<?php echo $usuario['id_usuario']; ?>" class="btn btn-warning"> Editar </a>
                        </td>

                        <td>
                            <a href="deletar.php?id_usuario=<?php echo $usuario['id_usuario']; ?>" class="btn btn-danger"> Deletar </a>
                        </td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>

</body>

</html>