<?php
include 'conexaobd.php';
if (isset($_GET['id_usuario'])) {
    $id_usuario = $_GET['id_usuario'];
    $consulta = mysqli_query($conexaoBD, "SELECT * FROM usuario WHERE id_usuario = $id_usuario");


    $contador = (is_array($consulta) ? count($consulta) : 1);
    if ($contador) {
        $campos = mysqli_fetch_array($consulta);
        $nome = $campos['nome'];
        $telefone = $campos['telefone'];
    }
}

if (isset($_POST['editar'])) {
    $id_usuario = $_GET['id_usuario'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $consultaAtualizar = "UPDATE usuario SET nome = '$nome', telefone = '$telefone' WHERE id_usuario = $id_usuario";

    $inserirNoBD = mysqli_query($conexaoBD, $consultaAtualizar);

    header('location: paginalistar.php');
}
