<?php
if(IsSet($_COOKIE["email_usuario"]))

    $email_usuario = $_COOKIE["email_usuario"];

if(IsSet($_COOKIE["senha_usuario"]))

    $senha_usuario = $_COOKIE["senha_usuario"];

if(!(empty($email_usuario) OR empty($senha_usuario)))//empty

{

    include "conecta_mysql.inc";

	$resultado = mysqli_query($con, "SELECT * FROM cadastroplanoempresarial WHERE email='$email_usuario'");

	if(mysqli_num_rows($resultado)==1)

	{

		$dados = mysqli_fetch_array($resultado); 

		$senha_banco = $dados["senha"];

		if($senha_usuario != $senha_banco)

		{

            setcookie("email_usuario");

            setcookie("senha_usuario");

            echo "Voce nao efetuou o LOGIN!";

            exit;

        }

    }

    else

    {

        setcookie("email_usuario");

        setcookie("senha_usuario");

        echo "Voce nao efetuou o LOGIN!";

        exit;

    }

}

else

{

    echo "Voce nao efetuou o LOGIN!";
    exit;
}

mysqli_close($con);
?>
