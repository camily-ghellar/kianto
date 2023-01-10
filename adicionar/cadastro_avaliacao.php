<?php
    include("conexao.php");

    $descricao = $_POST['descricao'];
    $data_entrega = $_POST['data_entrega'];
    $anexos = md5($_POST['anexos']);

   $cadastro_avaliacao = "INSERT INTO cadastro_avaliacao(descricao, data_entrega, anexos)
   VALUES ('$descricao', '$data_entrega', '$anexos')";

    if(mysqli_query($conexao, $cadastro_avaliacao)){
        echo "Funcionou!";
    }
    else{
        echo "Não funcionou!";
    }

    mysqli_close($conexao);
?>