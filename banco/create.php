<?php  
session_start();
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
$sql = mysqli_query($conexao,$sql) or die ("Ocorreu um erro na gravação dos dados!");

if(mysqli_insert_id($conexao)){
    $_SESSION['msg'] = "<div class='ui success floating message' style='margin: 0px 20px 20px 20px' ><i  class='close icon'></i><div class='header'>Projeto Cadastrado com sucesso!</div></div>";
    header("Location: ../cadastra.php");
}else{
    $_SESSION['msg'] = "<div class='ui negative floating message' style='margin: 0px 20px 20px 20px' ><i  class='close icon'></i><div class='header'>Ocorreu um erro ao cadastrar o projeto!</div></div>";
    header("Location: ../cadastra.php");
}
?>