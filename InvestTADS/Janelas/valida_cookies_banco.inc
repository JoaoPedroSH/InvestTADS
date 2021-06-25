<?php

if(IsSet($_COOKIE["email_usuario"]))//IsSet informa se a variavel foi iniciada

    $email_usuario = $_COOKIE["email_usuario"];//variavel $email_usuario recebe o cookie email_usuario

if(IsSet($_COOKIE["senha_usuario"]))//IsSet informa se a variavel foi iniciada 

    $senha_usuario = $_COOKIE["senha_usuario"];//variavel $senha_usuario recebe o cookie senha_usuario

if(!(empty($nome_usuario) OR empty($senha_usuario)))//empty - Informa se a variavel e vazia. Neste casos seria se ela nao for vazia 

{
    include "conecta_banco.inc";

	$resultado = mysqli_query($con, "SELECT * FROM cadastroplanopessoal WHERE email='$email_usuario'");//pesquisa ao banco de dados 

	if(mysqli_num_rows($resultado)==1)//verifica o numero de linhas, como vaiter so uma por causa da chave primeria que esta nesse campo usuario 

	{
		$dados = mysqli_fetch_array($resultado);//copia a linha selecionada 

		$senha_banco = $dados["senha"];//recupera o campos senha do banco

		if($senha_usuario != $senha_banco)//verificacao se for diferente entra no laco se 

		{

            setcookie("email_usuario"); //fecha cookie //so entra no laco se sua senha for diferente do banco

            setcookie("senha_usuario");//fecha cookie 

            echo "Voce nao efetuou o LOGIN!";

            exit;//fecha toda execucao script php

        }

    }

    else //so vai entra neste laco se $email_usuario e diferente do banco  

    {

        setcookie("email_usuario");//fecha cookie

        setcookie("senha_usuario");//fecha cookie

        echo "Voce nao efetuou o LOGIN!";

        exit;//fecha toda execucao script php

    }

}

else

{

    echo "Voce neo efetuou o LOGIN!";//se as variaveis de senha e usuario for vazias 
    exit;

}

mysqli_close($con);//fecha a conexao com o banco

?>