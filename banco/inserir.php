<?php
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$url_git = $_POST["urlGit"];
$url_online = $_POST["urlOnline"];
$categoria = $_POST["combobox"];
$desafios = $_POST["desafios"];
$radioGit;
$selecionados;

/*TRATAMENTO - RADIO*/
if( isset($_POST["radioGit"]) ){
 	$radioGit = $_POST["radioGit"];
}
/*TRATAMENTO - CHECKBOX*/
if( isset($_POST["tecnologia"]) ){
 	$selecionados = $_POST["tecnologia"];
}



$sql = "INSERT INTO project (nome, have_git, link_git, categoria, comentario) VALUES (
	'$nome', '$radioGit','$url_git', '$categoria', '$desafios')";

//Agora é hora de contatar o mysql
include 'conecta.php';

//Inserindo os dados

$sql = mysqli_query($conexao,$sql) or die ("Houve erro na gravação dos dados, por favor, clique em voltar e verifique os campos obrigatórios!");

echo "<h1>Cadastro efetuado com sucesso!</h1>";


/*
echo 'nome: '.$nome ."<br>";
echo 'descricao: '.$descricao .".<br>";

if( isset($_POST["radioGit"]) ){
 	echo 'tem git?: '.$radioGit .".<br>";
}

echo 'url_git: '.$url_git .".<br>";
echo 'url_online: '.$url_online .".<br>";
echo 'categoria: '.$categoria .".<br>";
echo 'desafios: '.$desafios .".<br>";
echo 'tecnologias: ';
if( isset($_POST["tecnologia"]) ){
 	foreach ($selecionados as $tecs) {
	echo $tecs .", ";
	}
}
*/
?>