<?php
$id = $_GET["id"];
include 'conecta.php';
$sql = "DELETE FROM projetos WHERE id='$id'";

$resultado = mysqli_query($conexao,$sql) or die ("Nao foi possivel realizar a exclusao");
echo "<h1>O projeto foi excluido com exito!</h1>";

?>

