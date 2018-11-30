<?php
//validas.php

session_start();

	if(Isset($_SESSION['userName']))
	{
	$nome_user = $_SESSION['userName'];
	}
	
	if(Isset($_SESSION['senha']))
	{
	$senha_user = $_SESSION['senha'] ;
	}

	if(!(empty($nome_user) or empty($senha_user)))
	{
		include "banco/conecta.php" ;
	$resultado = mysqli_query($conexao, "select * from projetos.user where login = '$nome_user'");
	
		if((mysqli_num_rows($resultado)) == 1)
		{
			$row = mysqli_fetch_assoc($resultado);
       $pass_db = $row['password'];
			
			if($senha_user !=  $pass_db)
			{

			unset($_SESSION['email']);
			unset($_SESSION['senha']);
			echo "Voc� n�o est� autenticado no sistema, favor efetuar login";
			exit;
			}
		}
		else
		{
		unset($_SESSION['email']);
		unset($_SESSION['senha']);
		echo "Você não possui cadastro.";
		exit;
		}
	}
	else
	{
	$_SESSION['needLogin'] = "<h1 class='h1-logo' style='margin-top: 50px'>Ops... É necessário que você faça o login primeiro.</h1>";
	header("Location: index.php");
	exit;
	}
mysqli_close($conexao)
/*
unset
(PHP 3, PHP 4, PHP 5)

unset -- Destr�i a vari�vel especificada
Descri��o
void unset ( mixed var [, mixed var [, ...]] )


unset() destr�i a vari�vel especificada. Lembrando que no PHP 3, unset() sempre retornar� TRUE (atualmente, o valor inteiro 1). No PHP 4, por�m, unset() n�o � uma fun��o verdadeira: agora � um construtor da linguagem. Como tal, nenhum valor � retornado, se tentar pegar o valor de unset() um erro de sintaxe (parse error) ir� acontecer. 

Exemplo 1. Exemplo de unset()

<?php
// destr�i uma �nica vari�vel
unset ($foo);

// destr�i um �nico elemento de uma matriz
unset ($bar['quux']);

// destr�i mais de uma vari�vel
unset ($foo1, $foo2, $foo3);
?>  
 Para maiores informa��es, consulte o manual do PHP
*/
?>
