<?php
//obtem os valores digitados
$email= $_POST["email"];
$senha= $_POST["senha"];

//acesso ao banco de dados
include "conecta_banco.inc";
$resultado = mysql_query($con, "SELECT * FROM cadastroplanopessoal where email='$email'");
$linhas = mysql_num_rows($resultado);//retorna o numero de linhas

if($linhas==0){ //testa se a consulta retornou algo
	echo "<html><body>";
	echo "<p align=\"center\">Usuario não encontrado!</p>";
	echo "<p align=\"center\"><a href=\"Login.html\">Voltar</a></p>";
	echo "</body></html>";
} else{
	$dados = mysql_fetch_array($resultado); //obtem linha de resultado como uma matriz
	$senha_banco = $dados["senha"];
	if ($senha != $senha_banco){
		echo "<html><body>";
		echo "<p align=\"center\">A senha está incorreta!</p>";
		echo "<p align=\"center\"><a href=\"Login.html\">Voltar</a></p>";
		echo "</body></html>";
	} else{ //usuario e senha corretos
		setcookie("email_usuario", $email);
		setcookie("senha_usuario", $senha);
		//direciona para a pagina inicial doa cadastrados
		header ("Location: TelaPessoal.html");
	}
}
mysql_close($con);
?>