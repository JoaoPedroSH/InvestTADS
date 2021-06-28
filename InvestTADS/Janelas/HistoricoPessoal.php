<?php

$email=$_POST['email'];

?>

<html>
<head>

<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<title>Histórico</title>

	<style> table{ border-spacing: 5px;}</style>

</head>

<body>
<style>

    body {

      background-image: url("imagens/set.jpg");

      background-size: cover;

      height: 800px;

      position: relative;
      
    }
</style>
	<br><br><br><br>
	<h1 align="center">HISTÓRICO DE GESTÃO</h1>
<br><br>
<center>
<table>

	<tr bgcolor="#5B96C0" style="margin-right: 30px;">

		<td><b>| Ganhos |</b></td>
		
		<td><b> Despesas |</b></td>
		
		<td><b> Investimentos |</b></td>

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

				$ganhos=$linha['ganhos'];

				$despesas=$linha['despesas'];

				$investimentos=$linha['investimentos'];

				
					
				echo "<tr bgcolor=\"#eeeeee\">";

				echo "<td align=\"center\" >$ganhos</td>";

				echo "<td align=\"center\" >$despesas</td>";

				echo "<td align=\"center\" >$investimentos</td>";

				echo "</tr>";

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
</center>
<br>
<br>
	<p align="center"><a type="button" href="TelaPessoal.php">Voltar</a></p>

</body>
</html>