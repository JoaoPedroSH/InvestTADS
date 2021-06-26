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
	
    $email = $_POST['email'];

	$ganhos = $_POST['ganhos'];

	$despesas = $_POST['despesas'];

	$investimentos = $_POST['investimentos'];

    $saldofinal = $_POST['saldofinal'];
    

	$sql = mysql_query("INSERT into gestaopessoal(email, ganhos, despesas, investimentos, saldofinal) 

	values('$email','$ganhos','$despesas','$investimentos','$saldofinal')");

    echo "<center>";

    echo "<div class=\"alert alert-success\" role=\"alert\">";

    echo "<h4 class=\"alert-heading\">TUDO CERTO!</h4>";

    echo "<p>Informações guardadas!</p>";

    echo "<hr>";

    echo "<a href=\"HistoricoPessoal.php\" target=\"_blank\" class=\"alert-link\">> Clique Aqui para ver seu Histórico < |</a><a href=\"TelaPessoal.php\" class=\"alert-link\"> > Clique Aqui para voltar a tela de Gestão <</a></div>";

    echo "</center>";

	?>

</body>
</html>