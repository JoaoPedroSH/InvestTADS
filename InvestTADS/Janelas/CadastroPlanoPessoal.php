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

    echo "<center>";

    echo "<div class=\"alert alert-success\" role=\"alert\">";

    echo "<h4 class=\"alert-heading\">TUDO CERTO!</h4>";

    echo "<p>Seu Cadastro foi efetuado com Sucesso!</p>";

    echo "<hr>";

    echo "<a href=\"Login.html\" class=\"alert-link\">> Clique Aqui para ir ao Login < |</a><a href=\"Index.html\" class=\"alert-link\"> > Clique Aqui para voltar ao Home <</a></div>";

    echo "</center>";

	?>

</body>
</html>