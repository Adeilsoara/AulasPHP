<?php 
    include 'menu.php';
    include 'conexaobd.php';
    include 'listaBD.php';
    include 'editarBD.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div class="container">
        <h1>Listar dados</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Funções</th>
                </tr>
            </thead>
            <?php while($usuario = mysqli_fetch_assoc($listarDados)) { ?>

            <tbody>
                <tr>
                    <th scope="row"><?php echo $usuario['id_usuario'];?></th>
                    <td><?php echo $usuario['nome'];?></td>
                    <td><?php echo $usuario['telefone'];?></td>
                    <td>
                        <a href="editar.php?id_usuario=<?php echo $usuario['id_usuario'];?>"><button class="btn btn-warning">Editar</button></a>
                    </td>
                    <td>
                        <a href="deletarBD.php?id_usuario=<?php echo $usuario['id_usuario'];?>"><button class="btn btn-danger">Deletar</button></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</body>

</html>