<?php
    session_start();
    if ((!isset($_SESSION['email'])==true) and (!isset($_SESSION['senha'])==true)) {
        header('Location: login.php');
    }

    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <?php
        echo "<h1>Bem Vindo <u>$logado</u></h1>";
    ?>

    <a href="sair.php">Sair</a>
</body>
</html>