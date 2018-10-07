<?php
session_start();
$id = $_GET["id"];
include 'conecta.php';
$sql = "DELETE FROM project WHERE id='$id'";
$resultado = mysqli_query($conexao,$sql) or die ("Nao foi possivel realizar a exclusao");
if(mysqli_affected_rows($conexao)){
    $_SESSION['msgEx'] = "<div class='ui success floating message' style='margin: 0px 20px 20px 20px' ><i  class='close icon'></i><div class='header'>Projeto excluído com sucesso!</div></div>";
    header("Location: ../controle.php");
}else{
    $_SESSION['msgEx'] = "<div class='ui negative floating message' style='margin: 0px 20px 20px 20px' ><i  class='close icon'></i><div class='header'>Ocorreu um erro ao excluir o projeto!</div></div>";
    header("Location: ../controle.php");
}

?>

