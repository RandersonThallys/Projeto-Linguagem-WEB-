<!DOCTYPE html>
<?php
    $conexao = mysqli_connect("localhost", "root", "senha");
    mysqli_select_db($conexao, "meu_banco");
    session_start();
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <script language="javascript">
            function sucesso(){
                setTimeout("window.location='index.php'", 4000);
            }
            function failed(){
                setTimeout("window.location='login.html'", 4000);
            }
        </script>
    </head>
    <body>
        <?php
            $user = $_POST["user"];
            $pass = $_POST["pass"];
            
            $consulta = mysqli_query("SELECT * FROM usuarios WHERE usuario = '$user' AND senha = '$pass'") or die (mysqli_error($conexao));
            $linhas = mysqli_num_rows($consulta);
            
            if($linhas == 0){
                echo"O login falhou. Você será redirecionado para a página de login em 4 segundos.";
                echo"<script language='javascript'>failed()</script>";
            } else {
                $_SESSION["usuario"]=$_POST["user"];
                $_SESSION["senha"]=$_POST["pass"];
                echo"Você foi logado com sucesso. Redirecionando em 4 segundos.";
                echo"<script language='javascript'>sucesso()</script";
            }
        ?>
    </body>
</html>