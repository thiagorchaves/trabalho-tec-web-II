<?php 
session_start();
include 'banco/conecta.php';               
$id_post = $_POST["id"];
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

$sql = "UPDATE project SET id='$id_post',nome='$nome', description='$descricao', have_git='$radioGit',link_git='$url_git', online='$radioOn',link_on='$url_online',categoria='$categoria',tecnologias='$str_tecnologias',comentario='$desafios' WHERE id='$id_post'";
                   
$resultado = mysqli_query($conexao,$sql) or die ("deu ruim");
if(mysqli_affected_rows($conexao)){
    $_SESSION['msg'] = "<div class='ui success floating message' style='margin: 0px 20px 20px 20px' ><i  class='close icon'></i><div class='header'>Projeto atualizado com sucesso!</div></div>";
    header("Location: edita.php?id=$id_post");
}else{
    $_SESSION['msg'] = "<div class='ui negative floating message' style='margin: 0px 20px 20px 20px' ><i  class='close icon'></i><div class='header'>Ocorreu um erro ao atualizar o projeto!</div></div>";
    header("Location: edita.php?id=$id_post");
}
?>