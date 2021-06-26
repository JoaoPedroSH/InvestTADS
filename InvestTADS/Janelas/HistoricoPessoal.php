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
	<h1 align="center">Livros da UEPA - BES Editora</h1>
	<hr>
	<table>
	<tr bgcolor="#5B96C0">
		<td><b></b></td>
		<td><b>Título</b></td>
		<td><b>Autor</b></td>
		<td><b>Páginas</b></td>
	</tr>
<?php
$host="localhost";
$user="root";
$pass="123";
$banco="editora";
$con=mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die (mysql_error());
$res=mysql_query("select * from livros where $chave like '%busca%'") or die (mysqli_error());
$row=mysql_num_rows($res);
		if($row > 0){
			while($linha=mysql_fetch_array($res)){
				$isbn=$linha['isbn'];
				$titulo=$linha['titulo'];
				$autor=$linha['autor'];
				$paginas=$linha['paginas'];
					
				echo "<tr bgcolor=\"#eeeeee\">";
				echo "<td>$isbn</td>";
				echo "<td>$titulo</td>";
				echo "<td>$autor</td>";
				echo "<td>$paginas</td>";
				echo "</tr>";
			}
		}
?>
</table>
	<hr>
	<p align="center"><a href="gerarPDF.php" target="_blank">Gerar relatórios</a></p><br><br><br>
	<p align="center"><a href="livros.html">Voltar</a></p>
</body>
</html>