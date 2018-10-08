<?php
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
    <title>Estácio Web Projects</title>
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/semantic.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="./css/animate.min.css">
</head>
<body>
    <div class="wrapper">
        <!--HEADER-->
        <header class="header-topo">
        <!--MENU NAVEGAÇÃO-->
            <nav class="nav">
                <div class="ui secondary pointing menu">
                    <a href="index.php" class="item item-menu" style="font-size: 14px;color:#365572; text-transform: uppercase;">
                        Home
                    </a>
                    <a href="projetos.php" class="item " style="font-size: 14px;color:#365572; text-transform: uppercase;">
                        Projetos
                    </a>
                    <a href="cadastra.php" class="item " style="font-size: 14px;color:#365572; text-transform: uppercase;">
                        Cadastrar projeto
                    </a>
                    <a href="sobreNos.php" class="item" style="font-size: 14px;color:#365572; text-transform: uppercase;">
                        Sobre nós
                    </a>
                    <div class="right menu">
                    <a href="controle.php" class="ui item" style="font-size: 14px;color:#365572; text-transform: uppercase;">
                        Painel de Controle
                    </a>
                    <a href="forca.php" class="ui item" style="font-size: 14px;color:#365572; text-transform: uppercase;">
                                Jogo da Forca
                            </a>
                </div>
            </nav>


        </header>
        <div>
        <h1 class="h1-logo fadeInLeftBig">Estácio Web Projects</h1>
        </div>
       
          <!--PRINCIPAL-->        
        <main class="main">
            <div class="ui segment">
                <h2 class="ui right floated header">Detalhes do projeto: <?php echo $nome;?></h2>
                <div class="ui clearing divider"></div>
            </div>

            <div class="ui segment " style="margin: 0 50px 10px; background: rgba(224, 223, 235, 0.8) ">
            <img class="ui large bordered left floated image animated fadeInLeft" src="img/projetos/<?php echo rand(1, 10);?>.jpg"/>
            <h4 class="ui horizontal divider header">
                <i class="code branch icon"></i>
                Descrição
                </h4>
                <p class="centralizado"><?php echo $descricao;?></p>
                <h4 style="margin-top: 150px" class="ui horizontal divider header">
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
                    <td><a href="www.github.com">www.github.com</a></td>
                    </tr>
                    <tr>
                    <td>Está Online?</td>
                    <td>Sim ou nao</td>
                    </tr>
                    <tr>
                    <td>Link Online</td>
                    <td><a href="http://<?php echo $url_git;?>" target="_blank"><?php echo $url_git;?></a></td>
                    </tr>
                    <tr>
                    <td>Categoria</td>
                    <td><?php echo $categoria;?></td>
                    </tr>
                    <tr>
                    <td>Tecnologias Utilizadas</td>
                    <td><?php echo $tecnologias;?></td>
                    </tr>
                </tbody>
                </table>
                <h4 class="ui horizontal divider header">
                <i class="users icon"></i>
                Quais foram os maiores desafios para implementar esse projeto?
                </h4>
                <p class="centralizado"><?php echo $comentario;?></p>
                <h4 class="ui horizontal divider header">
               
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
</body>

</html>