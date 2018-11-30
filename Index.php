<!DOCTYPE html>
<?php
    $conexao = mysqli_connect("localhost", "root", "senha");
    mysqli_select_db($conexao, "meu_banco");
    session_start();
    
    if(!isset($_SESSION["usuario"]) || !isset($_SESSION["senha"])){
        header"Location: login.html";
        exit;
    }
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Index</title>
    </head>
    <body>
        <h3> Logado. <a href="logout.php">Logout</a></h3>
    </body>
</html>