<?php
    include("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];

    $sql = "INSERT INTO cadastro(nome,email,senha,cpf) VALUES ('$nome','$email','$senha','$cpf')";

    if (mysqli_query($conexao,$sql)) {
        echo "Usuário cadastrado com sucesso!!";
    } else {
        echo "Erro".mysqli_connect_error($conexao);
    }

    mysqli_close($conexao);
?>