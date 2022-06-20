<?php
include 'conexaobd.php';

$listarDados = mysqli_query($conexaoBD, 'SELECT * FROM usuario');
?>