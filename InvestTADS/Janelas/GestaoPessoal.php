<!doctype html>
<html>
<head>

<meta charset="utf-8">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script type="text/javascript" src="CalculaSaldo.js"></script>

<title>Gestão</title>

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

    $saldofinal = parseFloat($ganhos) - parseFloat($despesas) - parseFloat($investimentos);
    

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

<!-- jQuery, Popper.js, Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
 crossorigin="anonymous"></script>

</body>
</html>
<script src="app.js"></script>