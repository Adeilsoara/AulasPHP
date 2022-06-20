<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBancoDeDados = "crud_php";

    $conexaoBD = mysqli_connect($servidor, $usuario, $senha, $nomeBancoDeDados);

    if(!$conexaoBD){
        echo "Não conectou ao bando de dados";
    }else{
        //echo "Conectado";
    }
?>