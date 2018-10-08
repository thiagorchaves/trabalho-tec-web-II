<?php  
session_start();

$validado = true;
/*************************************** */
//TRATA CAMPO NOME
if(empty($_POST["nome"])){
    $_SESSION["vazio_nome"] = "Campo nome é obrigatório!";
    header("Location: ../cadastra.php");
    $validado = false;
}else{
    $_SESSION["value_nome"] = $_POST['nome'];   
}


/************************************** */
//TRATA CAMPO DESCRICÃO
if(empty($_POST["descricao"])){
    $_SESSION["vazio_descricao"] = "Campo descrição é obrigatório!";
    header("Location: ../cadastra.php");
    $validado = false;
}else{
    $_SESSION["value_descricao"] = $_POST['descricao'];
}


/************************************** */
//TRATAMENTO - RADIO GIT
$radioGit;
if( isset($_POST["radioGit"]) ){
    $radioGit = $_POST["radioGit"];
 }



/************************************** */
//TRATA URL GIT
$url_git= $_POST["urlGit"];


/************************************** */
 //TRATAMENTO - RADIO ONLINE
 $radioOn;
 if ( isset($_POST["radioOn"]) ){
    $radioOn = $_POST["radioOn"];
 }

/************************************** */
//TRATA URL ONLINE
$url_online= $_POST["urlOnline"];


/************************************** */
//TRATA CATEGORIA (SELECT)
$categoria = $_POST["combobox"];


/************************************** */
/*TRATAMENTO  TECNOLOGIAS - CHECKBOX*/
$selecionados; //tecnologias selecionadas
$str_tecnologias; 

if( isset($_POST["tecnologia"]) ){
    $selecionados = $_POST["tecnologia"];
    $str_tecnologias = implode(',',  $selecionados); //converte para string
    }

/************************************** */
//TRATA COMENTÁRIOS
if(empty($_POST["desafios"])){
    $_SESSION["vazio_desafios"] = "Campo comentário é obrigatório!";
    header("Location: ../cadastra.php");
    $validado = false;
}else{
    $_SESSION["value_desafios"] = $_POST['desafios'];
}



if($validado){


//importa a conexao com o banco
include 'conecta.php';

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
$desafios = mysqli_real_escape_string($conexao, $_POST['desafios']);

$sql = "INSERT INTO project (nome, description, have_git, link_git, online, link_on, categoria, tecnologias,comentario) VALUES (
'$nome', '$descricao', '$radioGit','$url_git', '$radioOn', '$url_online' ,'$categoria', '$str_tecnologias', '$desafios')";

//execucao da query
$sql = mysqli_query($conexao,$sql) or die ("Ocorreu um erro na gravação dos dados!");

if(mysqli_insert_id($conexao)){
    $_SESSION['msg'] = "<div class='ui success floating message' style='margin: 0px 20px 20px 20px' ><i  class='close icon'></i><div class='header'>Projeto Cadastrado com sucesso!</div><p>Obrigado por cadastrar!</p></div>";
    header("Location: ../cadastra.php");
}else{
    $_SESSION['msg'] = "<div class='ui negative floating message' style='margin: 0px 20px 20px 20px' ><i  class='close icon'></i><div class='header'>Ocorreu um erro ao cadastrar o projeto!</div></div>";
    header("Location: ../cadastra.php");
}
}else{
    $_SESSION['msg'] = "<div class='ui negative floating message' style='margin: 0px 20px 20px 20px' ><i  class='close icon'></i><div class='header'>Verifique os campos obrigatórios!</div><p>Você esqueceu de preencher algum campo.</p></div>";
    header("Location: ../cadastra.php");
}
?>