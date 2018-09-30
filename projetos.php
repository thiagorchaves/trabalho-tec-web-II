<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Estácio Web Projects</title>
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/semantic.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">

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
                    <a href="projetos.php" class="item active" style="font-size: 14px;color:#365572; text-transform: uppercase;   background: rgb(114, 150, 171,0.4);">
                        Projetos
                    </a>
                    <a href="cadastra.php" class="item " style="font-size: 14px;color:#365572; text-transform: uppercase;">
                        Cadastrar projeto
                    </a>
                    <a href="sobreNos.php" class="item " style="font-size: 14px;color:#365572; text-transform: uppercase;">
                        Sobre nós
                    </a>
                    <div class="right menu">
                        <a href="controle.php" class="ui item" style="font-size: 14px;color:#365572; text-transform: uppercase;">
                            Painel de Controle
                        </a>
                        <a class="ui item" style="font-size: 14px;color:#365572; text-transform: uppercase;">
                            Logout
                        </a>
                    </div>
                </div>

            </nav>
        </header>
        <div>
        <h1 class="h1-logo">Estácio Web Projects</h1>
        </div>
       
        

                <main class="main">
                    <div class="ui segment">
                        <h2 class="ui right floated header">Projetos</h2>
                        <div class="ui clearing divider"></div>
                    </div>
         
                    <div class="ui centered link cards " style="margin: 0px;">

<?php
        include 'banco/conecta.php';
        $sql = "SELECT * FROM project";
        $resultado = mysqli_query($conexao,$sql) or die ("Não foi possível realizar a consulta ao banco de dados");
       
                while($linha=mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
                    $id = $linha["id"];
                    $nome = $linha["nome"];
                    $descricao = $linha["description"];
                    $data = $linha["createdate"];
               
?>
                        <div class="card">
                            <div class="image">
                                <img src="img/projetos/matthew.png">
                            </div>
                            <div class="content">
                                <div class="header"><?php echo $nome;?></div>
                                <div class="meta">
                                    <a>Espiar</a>
                                </div>
                                <div class="description">
                                <?php echo $descricao;?> </div>
                            </div>
                            <div class="extra content">
                                <span class="right floated">
                                <?php echo $data;?>
                                </span>
                                
                            </div>
                        </div>
<?php
}
?>                       

                 </main>

                <div class="flex-container">
                    <div class="ui borderless menu" >
                        <a class="item">1</a>
                        <a class="item">2</a>
                        <a class="item">3</a>
                        <a class="item">4</a>
                        <a class="item">5</a>
                        <a class="item active">6</a>
                    </div>
                </div>

           <footer class="footer">Footer</footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="Semantic-UI-CSS-master/semantic.min.js"></script>
</body>

</html>