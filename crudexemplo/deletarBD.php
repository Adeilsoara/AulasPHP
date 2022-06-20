<?php
include 'conexaobd.php';

$id_usuario = $_GET["id_usuario"];

if (isset($_GET['id_usuario'])) {
    $consulta = mysqli_query($conexaoBD, "DELETE FROM usuario WHERE id_usuario = {$id_usuario}");
    header('location: listar.php');
}
?>