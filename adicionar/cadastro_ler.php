<?php
    include("conexao.php");

    $descricao = $_POST['descricao'];
    $anexos = md5($_POST['anexos']);

   $cadastro_conteudo_ler = "INSERT INTO cadastro_conteudo_ler(descricao, anexos)
   VALUES ('$descricao', '$anexos')";

    if(mysqli_query($conexao, $cadastro_conteudo_ler)){
        echo "Funcionou!";
    }
    else{
        echo "Não funcionou!";
    }

    mysqli_close($conexao);
?>