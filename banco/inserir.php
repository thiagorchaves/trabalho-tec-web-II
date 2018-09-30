<?php
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$radioGit;
$url_git = $_POST["urlGit"];
$radioOn;
$url_online = $_POST["urlOnline"];
$categoria = $_POST["combobox"];
$selecionados; //tecnologias selecionadas
$str_tecnologias; 
$desafios = $_POST["desafios"];


//TRATAMENTO - RADIO GIT
if( isset($_POST["radioGit"]) ){
 	$radioGit = $_POST["radioGit"];
}
//TRATAMENTO - RADIO ONLINE
if ( isset($_POST["radioOn"]) ){
	$radioOn = $_POST["radioOn"];
}

/*TRATAMENTO - CHECKBOX*/
if( isset($_POST["tecnologia"]) ){
	 $selecionados = $_POST["tecnologia"];
	 $str_tecnologias = implode(',',  $selecionados); //converte para string
	 
}


$sql = "INSERT INTO project (nome, description, have_git, link_git, online, link_on, categoria, tecnologias,comentario) VALUES (
	'$nome', '$descricao', '$radioGit','$url_git', '$radioOn', '$url_online' ,'$categoria', '$str_tecnologias', '$desafios')";

//importa a conexao com o banco
include 'conecta.php';

//execucao da query

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