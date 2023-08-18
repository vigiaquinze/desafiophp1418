<?php
    if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['cpf']) ) {
        
        include("conexao.php");

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];

        $sql = "INSERT INTO usuarios(nome,email,senha,cpf) VALUES ('$nome','$email','$senha','$cpf')";

        if (mysqli_query($conexao,$sql)) {
            echo "<script language='javascript' type='text/javascript'> 
            alert('Usuário cadastrado com sucesso!!'); window.location.href='cadastro.html';</script>";
        } else {
            echo "Erro".mysqli_connect_error($conexao);
        }

        mysqli_close($conexao);
    } else {
        echo "<script language='javascript' type='text/javascript'> 
        alert('Os campos devem ser preenchidos para prosseguir'); window.location.href='cadastro.html';</script>";
    }
?>