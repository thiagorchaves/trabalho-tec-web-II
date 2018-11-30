<?php  
session_start();

$validado = true;
/*************************************** */
//TRATA CAMPO userName
if(empty($_POST["userName"])){
    $_SESSION["vazio_userName"] = "Campo userName é obrigatório!";
    header("Location: ../index.php");
    $validado = false;
}else{
    $_SESSION["value_userName"] = $_POST['userName'];   
}

/************************************** */
//TRATA CAMPO NOME DO USUÁRIO
if(empty($_POST["name"])){
    $_SESSION["vazio_name"] = "Campo name é obrigatório!";
    header("Location: ../index.php");
    $validado = false;
}else{
    $_SESSION["value_name"] = $_POST['name'];
}

/************************************** */
//TRATA CAMPO EMAIL
if(empty($_POST["email"])){
  $_SESSION["vazio_email"] = "Campo email é obrigatório!";
  header("Location: ../index.php");
  $validado = false;
}else{
  $_SESSION["value_email"] = $_POST['email'];
}
/************************************** */
//TRATA CAMPO SENHA
if(empty($_POST["criaSenha"])){
  $_SESSION["vazio_criaSenha"] = "Campo criaSenha é obrigatório!";
  header("Location: ../index.php");
  $validado = false;
}else{
  $_SESSION["value_criaSenha"] = $_POST['criaSenha'];
}



if($validado){


//importa a conexao com o banco
include "../banco/conecta.php" ;

$userName = mysqli_real_escape_string($conexao, $_POST['userName']);
$name = mysqli_real_escape_string($conexao, $_POST['name']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['criaSenha']);

$sql = "INSERT INTO projetos.user (login,nome,email,password) VALUES (
'$userName', '$name', '$email', '$senha')";

//execucao da query
$sql = mysqli_query($conexao,$sql) or die ("Ocorreu um erro na gravação dos dados!");

if(mysqli_insert_id($conexao)){
    $_SESSION['error'] = "<div class='ui success floating message' style='margin: 0px 20px 20px 20px' ><i  class='close icon'></i><div class='header'>Você foi cadastrado com Sucesso!</div><p>Agora você pode logar no sistema!</p></div>";
    header("Location: ../index.php");
}else{
    $_SESSION['error'] = "<div class='ui negative floating message' style='margin: 0px 20px 20px 20px' ><i  class='close icon'></i><div class='header'>Ocorreu um erro ao cadastrar o projeto!</div></div>";
    header("Location: ../index.php");
}
}else{
    $_SESSION['error'] = "<div class='ui negative floating message' style='margin: 0px 20px 20px 20px' ><i  class='close icon'></i><div class='header'>Verifique os campos obrigatórios!</div><p>Você esqueceu de preencher algum campo.</p></div>";
    header("Location: ../index.php");
}
?>