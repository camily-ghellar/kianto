<?php
    include("conexao.php");

    $nome = $_POST['nome'];
    $cor = md5($_POST['cor']);

   $cadastro_materia = "INSERT INTO cadastro_materia(nome, cor)
   VALUES ('$nome', '$cor')";

    if(mysqli_query($conexao, $cadastro_materia)){
        echo "Funcionou!";
    }
    else{
        echo "Não funcionou!";
    }

    mysqli_close($conexao);
?>