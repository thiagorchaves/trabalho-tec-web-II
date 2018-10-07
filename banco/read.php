<?php
include 'conecta.php';               
$id = $_GET["id"];                   
$sql = "SELECT * FROM project WHERE id='$id'";
$resultado = mysqli_query($conexao,$sql) or die ("Não foi possível realizar a consulta ao banco de dados");

while ($linha=mysqli_fetch_array($resultado,MYSQLI_ASSOC)) {
    $id = $linha["id"];
    $nome = $linha["nome"];
    $descricao = $linha["description"];
    $radioGit = $linha["have_git"];
    $radioOn = $linha["online"];
    $url_online = $linha["link_on"];
    $url_git = $linha["link_git"];
    $categoria = $linha["categoria"];
    $tecnologias = $linha["tecnologias"];
    $comentario = $linha["comentario"];


//Tratar CheckBox
$arrTecnologias = explode(",",  $tecnologias);
$HTML = "";
$CSS = "";
$JAVASCRIPT = "";
$JQUERY = "";
$BOOTSTRAP = "";
$MYSQL = "";
$OUTROS = "";
foreach ($arrTecnologias as $value) {
    if($value == "HTML"){
        $HTML = "checked";
    }
    if($value == "CSS"){
        $CSS = "checked";
    }
    if($value == "JavaScript"){
        $JAVASCRIPT = "checked";
    }
    if($value == "JQuery"){
        $JQUERY = "checked";
    }
    if($value == "BootStrap"){
        $BOOTSTRAP = "checked";
     }
    if($value == "MySql"){
        $MYSQL = "checked";
    }
    if($value == "Outros"){
        $OUTROS = "checked";
    }

}
?>