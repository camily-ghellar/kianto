<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbnome = "cadastro";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbnome);
    if(!$conexao){
        die("Não foi possível conectar no banco de dados!");
    }
?>