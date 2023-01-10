<?php
    include("conexao.php");

    $descricao = $_POST['descricao'];
    $data_entrega = $_POST['data_entrega'];
    $anexos = md5($_POST['anexos']);

   $cadastro_atividade = "INSERT INTO cadastro_atividade(descricao, data_entrega, anexos)
   VALUES ('$descricao', '$data_entrega', '$anexos')";

    if(mysqli_query($conexao, $cadastro_atividade)){
        echo "Funcionou!";
    }
    else{
        echo "Não funcionou!";
    }

    mysqli_close($conexao);
?>