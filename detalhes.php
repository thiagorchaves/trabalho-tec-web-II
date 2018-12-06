<?php
 include "login/validar.php";
include 'banco/conecta.php';               
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
    $nomeImg = $linha["imagem"];


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
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes - <?php echo $nome;?></title>
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/semantic.css">
    <link rel="stylesheet" href="./css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <div class="wrapper">
        <!--HEADER-->
        <?php include 'menu.php';?>
        <div>
        <h1 class="h1-logo fadeInLeftBig">Estácio Web Projects</h1>
        </div>
       
          <!--PRINCIPAL-->        
        <main class="main">
            <div class="ui segment">
                <h2 class="ui right floated header">Detalhes do projeto: <?php echo $nome;?></h2>
                <div class="ui clearing divider"></div>
            </div>

            <div class="main-content">
                <div class="detalhes-item">
                    <img  class="imgCenter animated fadeInLeft" src="img/projetos/<?php echo $nomeImg;?>">
                        <div class="detalhe-item-descricao">
                            <h4 class="ui horizontal divider header"><i class="code branch icon"></i>
                                Descrição
                            </h4>
                            <p><?php echo $descricao;?></p>
                        </div>
                </div>

                <div class="detalhes-item">
                    <div class="detalhe-item-detalhes">
                        <h4 class="ui horizontal divider header">
                            <i class="bar chart icon"></i>
                            Detalhes
                        </h4>
                        <table class="ui definition table">
                            <tbody>
                                <tr>
                                <td class="two wide column"><i class="github icon"></i>Está no Git Hub?</td>
                                <td><?php echo ($radioGit == 1) ?"Sim" : "Não";?></td>
                                </tr>
                                <tr>
                                <td><i class="github icon"></i>Link do Git</td>
                                <td><a href="http://<?php echo $url_git;?>" target="_blank"><?php echo $url_git;?></a></td>
                                </tr>
                                <tr>
                                <td>Está Online?</td>
                                <td>Sim ou nao</td>
                                </tr>
                                <tr>
                                <td>Link Online</td>
                                <td><a href="http://<?php echo $url_online;?>" target="_blank"><?php echo $url_online;;?></a></td>
                                </tr>
                                <tr>
                                <td>Categoria</td>
                                <td><?php echo $categoria;?></td>
                                </tr>
                                <tr>
                                <td>Tecnologias Utilizadas</td>
                                <td><div><?php echo $tecnologias;?></div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="detalhes-item">
                    <div class="detalhe-item-comentario">
                        <h4>
                            <i class="users icon"></i>
                            Quais foram os maiores desafios para implementar esse projeto?
                        </h4>
                        <p class="centralizado"><?php echo $comentario;?></p>
                        <h4 class="ui horizontal divider header">
                    </div>
                </div>

            </div>
            <?php
}//fechando while
?>
        </main>
        

       <footer class="footer centralizado">
          <p>Copyright <i class="copyright outline icon"></i>  - Paulo Tarcisio, Thiago Romualdo - 2018</p>
        </footer>
    
    </div>

     <script src="js/jquery.min.js"></script>
    <script src="Semantic-UI-CSS-master/semantic.min.js"></script>
    <script src="js/menu.js"></script>
</body>

</html>