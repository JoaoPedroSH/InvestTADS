<!doctype html>
<html>
<head>

<meta charset="utf-8">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<title>Cadastro</title>

</head>

<body>

	<?php

	$host = "localhost";

	$user = "root";

	$pass = "123";

	$banco = "investtads";

	$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());//abre uma conexao com o servidor mysql
	mysql_select_db($banco) or die(mysql_error());//seleciona um banco
	
	$nome = $_POST['nome'];

	$sobrenome = $_POST['sobrenome'];

	$cidade = $_POST['cidade'];

    $celular = $_POST['celular'];
    
	$email = $_POST['email'];

	$senha = $_POST['senha'];

	$sql = mysql_query("INSERT into cadastroplanopessoal(nome, sobrenome, cidade, celular, email, senha) 

	values('$nome','$sobrenome','$cidade','$celular','$email','$senha')");

	echo "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">";

    echo "<strong>Cadastro efetuado com Sucesso!</strong><a href=\"Login.html\" class=\"alert-link\"> Clique aqui para ir ao Loguin.</a>";

    echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>";

	?>

</body>
</html>