<?php
//login.php
session_start();
$user = $_POST["userName"];
$pass = $_POST["senha"];

include "../banco/conecta.php" ;
$resultado = mysqli_query($conexao, "SELECT * from projetos.user where login='$user'");
$linhas = mysqli_num_rows ($resultado);
	if ($linhas == 0)
	{
	echo "Usuário não encontrado";
	$_SESSION['UserNotFound'] = "<div class='ui negative floating message' style='margin: 0px 20px 20px 20px' ><i  class='close icon'></i><div class='header'>Nome de usuário incorreto ou não foi digitado.</div></div>";
	header("Location: ../index.php");
	}
	else
	{
		 $row = mysqli_fetch_assoc($resultado);
           	 $pass_db = $row['password'];
		if($pass != $pass_db)
		{
		echo "Senha inválida";
		$_SESSION['passError'] = "<div class='ui negative floating message' style='margin: 0px 20px 20px 20px' ><i  class='close icon'></i><div class='header'>Senha inválida!</div></div>";
		header("Location: ../index.php");
		}

		else
		{
		//GRAVANDO A SESSAO
		session_start();
		$_SESSION['userName']= $user;
		$_SESSION['senha'] = $pass;
		header('Location: ../projetos.php');
		}
	}
mysqli_close($conexao);
?>