<?php

$email = $_POST["email"];

$senha = $_POST["senha"];



include "conecta_mysql.inc";

$resultado = mysqli_query($con,"SELECT * FROM cadastroplanopessoal where email='$email'");

$linhas = mysqli_num_rows ($resultado);

if($linhas==0)

{

	echo "<html><body>";

	echo "<p align=\"center\">Usuario nao encontrado!</p>";

	echo "<p align=\"center\"><a href=\"Login.html\">Voltar</a></p>";

	echo "</body></html>";

}

else

{

	$dados = mysqli_fetch_array($resultado);

	$senha_banco = $dados["senha"]; 
	
   	if ($senha != $senha_banco) 

	{

		echo "<html><body>";

		echo "<p align=\"center\">A senha esta incorreta!</p>";

		echo "<p align=\"center\"><a href=\"Login.html\">Voltar</a></p>";

		echo "</body></html>";
	}

	else

    {

        setcookie("email_usuario", $email);

        setcookie("senha_usuario", $senha);

        header ("Location: TelaPessoal.php");

    }

}

mysqli_close($con);
?>