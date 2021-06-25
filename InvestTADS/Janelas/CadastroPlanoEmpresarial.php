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

	$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());

	mysql_select_db($banco) or die(mysql_error());
	
	$nome = $_POST['nome'];

	$area = $_POST['area'];

	$cnpj = $_POST['cnpj'];

    $telefone = $_POST['telefone'];
    
	$email = $_POST['email'];

	$senha = $_POST['senha'];

    $comprovante = $_POST['comprovante'];

	$sql = mysql_query("INSERT into cadastroplanoempresarial(nome, area, cnpj, telefone, email, senha, comprovante) 

	values('$nome','$area','$cnpj','$telefone','$email','$senha','$comprovante')");

    echo "<center>";

    echo "<div class=\"alert alert-success\" role=\"alert\">";

    echo "<h4 class=\"alert-heading\">TUDO CERTO!</h4>";

    echo "<p>Seu Cadastro foi efetuado com Sucesso!</p>";

    echo "<hr>";

    echo "<a href=\"LoginE.html\" class=\"alert-link\">> Clique Aqui para ir ao Login < |</a><a href=\"Index.html\" class=\"alert-link\"> > Clique Aqui para voltar ao Home <</a></div>";

    echo "</center>";

	?>

</body>
</html>