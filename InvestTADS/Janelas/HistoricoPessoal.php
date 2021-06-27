<?php

$email=$_POST['email'];

?>

<html>
<head>

<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<title>Livros</title>

	<style> table{ border-spacing: 5px;}</style>

</head>

<body>

	<h1 align="center">HISTÓRICO DE GESTÃO</h1>

	<hr>

	<table>

	<tr bgcolor="#5B96C0" style="margin-right: 30px;">

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

$res=mysql_query("select * from gestaopessoal where email like '%$email%'") or die (mysqli_error());

$row=mysql_num_rows($res);

		if($row > 0){

			while($linha=mysql_fetch_array($res)){

				if($email='email'){

				$ganhos=$linha['ganhos'];

				$despesas=$linha['despesas'];

				$investimentos=$linha['investimentos'];

				$saldofinal=$linha['saldofinal'];
					
				echo "<tr bgcolor=\"#eeeeee\">";

				echo "<td>$ganhos</td>";

				echo "<td>$despesas</td>";

				echo "<td>$investimentos</td>";

				echo "<td>$saldofinal</td>";

				echo "</tr>";

				} else {
					echo "<html><body>";

            		echo "<p align=\"center\">Informe o Email correto para visualizar seu Histórico!</p>";
            
            		echo "</body></html>";
        
           			echo "<tr bgcolor=\"#eeeeee\">";

            echo "</tr>";
				}

				

			}

		}

        else{ 

            echo "<html><body>";

            echo "<p align=\"center\">Nenhum dado encontrado!</p>";
            
            echo "</body></html>";
        
            echo "<tr bgcolor=\"#eeeeee\">";

            echo "</tr>";

        } 

?>

</table>

	<hr>

	<p align="center"><a href="TelaPessoal.php">Voltar</a></p>

</body>
</html>