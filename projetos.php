<?php
        include 'banco/conecta.php';
        if( isset($_SESSION['msg']) ){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        
        $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
        $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
        //setar a quantidade de itens por pagina
        $qnt_resultados_pg = 10;
    
           //calcular o inicio visualizacao
         $inicio = ($qnt_resultados_pg * $pagina) - $qnt_resultados_pg;   
    
        $sql = "SELECT * FROM project LIMIT $inicio, $qnt_resultados_pg";
        
        $resultado = mysqli_query($conexao,$sql) or die ("Não foi possível realizar a consulta ao banco de dados");

        

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
                            Painel de projetos
                        </a>
                        <a class="ui item" style="font-size: 14px;color:#365572; text-transform: uppercase;">
                            Logout
                        </a>
                    </div>
                </div>

            </nav>
        </header>
        <div>
        <h1 class="h1-logo animated fadeInLeftBig">Estácio Web Projects</h1>
        </div>
       
        

                <main class="main">
                    <div class="ui segment">
                        <h2 class="ui right floated header">Projetos</h2>
                        <div class="ui clearing divider"></div>
                    </div>
                    <div class="ui centered cards" style="margin: 0px;">   
  <?php
while($linha=mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
    $id = $linha["id"];
    $nome = $linha["nome"];
    $descricao = $linha["description"];
    $data = $linha["createdate"];             
?>                 
                                 
                        <a href="detalhes.php?id=<?php echo$id;?>" id="cardAnimado" class="card animated zoomIn">
                            <div class="image">
                                <img src="img/projetos/<?php echo rand(1, 10);?>.jpg">
                            </div>
                            <div class="content">
                                <div class="header"><?php echo $nome;?></div>
                                <div class="description">
                                <?php echo $descricao;?> </div>
                            </div>
                            <div class="extra content">
                                <span class="right floated">
                                <?php echo $data;?>
                                </span>
                                
                            </div>
                        </a>
                        
<?php
}
?>  
       
                 </main>
                               
     <?php
    $resultado_pg = "SELECT COUNT(id) AS num_result FROM project";
    $qnt_registros = mysqli_query($conexao, $resultado_pg);  
    $linha_pg = mysqli_fetch_assoc($qnt_registros);
    //echo $linha_pg['num_result'];
   
    //determinar quantidade de paginas 
    $quantidade_paginas = ceil($linha_pg['num_result'] / $qnt_resultados_pg);
   
   //limitar os links antes e depois
   $max_links = 2;
    //primeira pagina
   echo '<div class="flex-container">'; 
   echo '<div class="ui borderless menu" >'; 

   echo '<a class="item" href="projetos.php?pagina=1">Primeira </a>'; 
    //duas paginas antes
   for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
        if($pag_ant >= 1){
            echo '<a class="item" href="projetos.php?pagina='.$pag_ant.'"> '.$pag_ant.' </a>';
        }
    }
    //pagina atual
   echo '<a class="item active">'.$pagina.'</a>';

    //duas paginas depois
    for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
        if($pag_dep <= $quantidade_paginas){
            echo '<a class="item" href="projetos.php?pagina='.$pag_dep.'"> '.$pag_dep.' </a>';
        }
    }

   echo '<a class="item" href="projetos.php?pagina='.$quantidade_paginas.'"> Ultima</a>';

   echo'</div>';//fechando div ui borderless menu 
   echo'</div>';//fechando div ui borderless menu 
   mysqli_free_result($resultado);

   mysqli_close($conexao);
    ?>

               

      <footer class="footer">
          <p>Copyright <i class="copyright outline icon"></i>  - Paulo Tarcisio, Thiago Romualdo - 2018</p>
        </footer>
    </div>

     <script src="js/jquery.min.js"></script>
    <script src="Semantic-UI-CSS-master/semantic.min.js"></script>
    
</body>

</html>