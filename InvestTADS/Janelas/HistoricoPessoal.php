<?php

$chave=$_POST['chave'];

$busca=$_POST['busca'];

if(strlen($busca)<2){

	echo "<html><body>";

	echo "<p align=\"center\">O termo a ser buscado deve ter no minimo 2 caracteres!</p>";

	echo "<p align=\"center\"><a href=\"livros.html\">Voltar</a></p>";

	echo "</body></html>";

	exit;
}

?>

<html>
<head>

<meta charset="utf-8">

<title>Livros</title>

	<style> table{ border-spacing: 3px;}</style>

</head>

<body>

	<h1 align="center">HISTÓRICO DE GESTÃO</h1>

	<hr>

	<table>

	<tr bgcolor="#5B96C0">

		<td><b>Valor Ganhos</b></td>

		<td><b>Valor Despesas</b></td>

		<td><b>Valor Investimentos</b></td>

		<td><b>Saldo Final</b></td>

	</tr>

<?php

$host="localhost";

$user="root";

$pass="123";

$banco="investtads";

$con=mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die (mysql_error());

$res=mysql_query("select * from gestaopessoal where email='$email'") or die (mysqli_error());

$row=mysql_num_rows($res);

		if($row > 0){

			while($linha=mysql_fetch_array($res)){

				$ganhos=$linha['ganhos'];

				$despesas=$linha['despesas'];

				$investimentos=$linha['investimentos'];

				$saldofinal=$linha['saldofinal'];
					
				echo "<tr bgcolor=\"#eeeeee\">";

				echo "<td>$ganhos</td>";

				echo "<td>$despesas</td>";

				echo "<td>$investimento</td>";

				echo "<td>$saldofinal</td>";

				echo "</tr>";

			}

		}

?>

</table>

	<hr>

	<p align="center"><a href="TelaPessoal.php">Voltar</a></p>

</body>
</html>