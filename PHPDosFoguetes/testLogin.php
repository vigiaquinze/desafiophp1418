<?php
session_start();

if(!empty($_POST['email']) && !empty($_POST['senha'])){
    include('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'";

    $result = $conexao->query($sql);

    print_r($sql);
    print_r($result);

    if (mysqli_num_rows($result) < 1) {
        // ñ existe
        print_r('Não existe!');
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: Login.php');
    } else {
        // existe
        print_r('Logado!!');
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');
    }
} else {
    print_r('Não entra!');
}
?>