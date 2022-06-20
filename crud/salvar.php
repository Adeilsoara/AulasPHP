<?php
include 'conexaobd.php';

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];

    $salvar = mysqli_query($conexaoBD, "INSERT INTO usuario(nome, telefone) VALUES ('$nome', '$telefone')");

    if($salvar){
        header('location: index.php');
    }
?>