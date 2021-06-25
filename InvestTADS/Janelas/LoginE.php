<?php

$email = $_POST["email"];

$senha = $_POST["senha"];



include "conecta_mysql.inc";

$resultado = mysqli_query($con,"SELECT * FROM cadastroplanoempresarial where email='$email'");

$linhas = mysqli_num_rows ($resultado);

if($linhas==0)

{

	echo "<html><head>";

    echo "<meta charset=\"utf-8\">";

    echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">";
        
    echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">";
          
    echo "</head>";

    echo "<body>";

	echo "<div class=\"alert alert-danger\" role=\"alert\">";

	echo "Email incorreto ou não cadastrado! <a href=\"Login.html\" class=\"alert-link\">Tentar novamente!</a>";

	echo "</div>";

	echo "</body></html>";

}

else

{

	$dados = mysqli_fetch_array($resultado);

	$senha_banco = $dados["senha"]; 
	
   	if ($senha != $senha_banco) 

	{

		echo "<html><head>";

        echo "<meta charset=\"utf-8\">";

        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">";

        echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">";
          
        echo "</head>";

        echo "<body>";

		echo "<div class=\"alert alert-danger\" role=\"alert\">";

		echo "Senha Incorreta! <a href=\"Login.html\" class=\"alert-link\">Tentar novamente!</a>";

		echo "</div>";

		echo "</body></html>";
	}

	else

    {

        setcookie("email_usuario", $email);

        setcookie("senha_usuario", $senha);

        header ("Location: TelaEmpresarial.php");

    }

}

mysqli_close($con);
?>