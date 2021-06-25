<?php
    //conexão com o Banco de dados
  
    $host="localhost"; // local 
    $user="root"; /// usuario banco
    $pass="123"; ///  senha banco
    $banco="investtads"; /// nome banco

     //mysql_connect Inicia conexão com o banco Mysql

     $conexao = mysql_connect($host, $user, $pass) or die(mysql_error());


       //mysql_select_db  Seleciona um banco de daods Mysql
       mysql_select_db($banco)  or die (mysql_error());
    
?>

<!DOCTYPE html>
<html lang="pr-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altenticacao</title>

    <!--função do login-->
    <script type="text/javascript">

    //direncionando pra uma página após 5 segundo
        function loginsucessfully(){
            setTimeout( "window.location='TelaPessoal.html'",0);
        }

        function loginfailed(){
            setTimeout("window.location='Login.html'",0);
        }
    </script>
</head>
<body>
    <?php
        //recebendo valores do form
        $email=$_POST['email'];
        $senha=$_POST['senha'];

        //comando sql

        $sql = mysql_query ("select * from cadastroplanopessoal where email='$email' and senha ='$senha'") or die (mysql_error());

        $row=mysql_num_rows($sql);

        // se o banco responder 1 linha
        if($row > 0){
            session_start();

            $_SESSION['email']=$_POST['email'];
            $_SESSION['senha']=$_POST['senha'];

            echo "<center>Você foi autenticado com sucesso! Aguarde um instante.</center>";
            echo "<script>loginsucessfully()</script>";

        }else{
            echo "<center>Nome do usuáio ou senha inválida! Aguarde um instante para tentar novamente</center>";
            echo "<script>logifailed()</script>";
        }
    ?>
</body>
</html>