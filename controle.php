<?php
    session_start();
    include 'banco/conecta.php';      
    $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
    //setar a quantidade de itens por pagina
    $qnt_resultados_pg = 5;

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
                    <a href="sobreNos.php" class="item " style="font-size: 14px;color:#365572; text-transform: uppercase;">
                        Sobre nós
                    </a>
                    <div class="right menu">
                        <a href="controle.php" class="ui item active" style="font-size: 14px;color:#365572; text-transform: uppercase;   background: rgb(114, 150, 171,0.4);">
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
        <!--PRINCIPAL-->
        <main class="main">
            <div class="ui segment">
                <h2 class="ui right floated header">Seus projetos cadastrados</h2>
                <div class="ui clearing divider"></div>
            </div>
          <!-- mensagem de sucesso-->
          <?php  if( isset($_SESSION['msgEx'])){  ?>        
            <?php echo $_SESSION['msgEx']; unset($_SESSION['msgEx']);?>
       <?php
       }
        ?>       

            <div class="ui segment " style="margin: 0px 50px 10px;">
            <div class="field">
                             <button class="ui black button" onclick="window.open('cadastra.php','_self')">Cadastrar novo projeto</button>
                        </div>   

                
                    <table class="ui striped table">
                        <thead>
                            <tr>
                            <th>Nome Projeto</th>
                            <th>Descrição</th>
                            <th>Tem Git?</th>
                            <th>Está Online?</th>
                            <th>Ver detalhes</th>
                            <th>Alterar</th>
                            <th>Excluir</th>
                            </tr>
                        </thead>
                        <tbody>                  
<?php
while($linha=mysqli_fetch_array($resultado,MYSQLI_ASSOC)) {
    $id = $linha["id"];
    $nome = $linha["nome"];
    $descricao = $linha["description"];
    $temGit = $linha["have_git"];
    $estaOnline = $linha["online"];
?>
                        <tr>
                                <td><?php echo $nome;?></td>
                                <td><?php echo $descricao;?></td>
                                <td><?php echo $temGit;?></td>      
                                <td><?php echo $estaOnline;?></td>     
                                <td>
                                <div class="ui small basic icon buttons">
                                    <a class="ui button" href="detalhes.php?id=<?php echo$id;?>"><i class="sign in alternate icon"></i></a></td>              
                                </div>
                                <td>
                                            <div class="ui small basic icon buttons">
                                                <a  class="ui button" href="edita.php?id=<?php echo $id;?>"><i class="pencil alternate icon"></i></a>
                                            </div>
                                        </td>
                                <td>
                                    <div class="ui small basic icon buttons">
                                    <a class="ui button" id="iconExcluir" href="banco/excluir.php?id=<?php echo $id;?>" data-confirm='Tem certeza de que deseja excluir o item selecionado?'><i id="remover"class="trash alternate icon"></i></a>
                                    
                                </td>
                        </tr>
               
<?php
}//fechando while
 

?>
                     </tbody>
                    </table>

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

   echo '<a class="item" href="controle.php?pagina=1">Primeira </a>'; 
    //duas paginas antes
   for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
        if($pag_ant >= 1){
            echo '<a class="item" href="controle.php?pagina='.$pag_ant.'"> '.$pag_ant.' </a>';
        }
    }
    //pagina atual
   echo '<a class="item active">'.$pagina.'</a>';

    //duas paginas depois
    for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
        if($pag_dep <= $quantidade_paginas){
            echo '<a class="item" href="controle.php?pagina='.$pag_dep.'"> '.$pag_dep.' </a>';
        }
    }

   echo '<a class="item" href="controle.php?pagina='.$quantidade_paginas.'"> Ultima</a>';

   echo'</div>';//fechando div ui borderless menu 
   echo'</div>';//fechando div ui borderless menu 
   mysqli_free_result($resultado);

   mysqli_close($conexao);
    ?>
        </main>
   
        <footer class="footer">Footer</footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="Semantic-UI-CSS-master/semantic.min.js"></script>
    <script src="js/form-js.js"></script>
    <script>
        (function () {
            $('.message .close')
                    .on('click', function() {
                    $(this)
                        .closest('.message')
                        .transition('fade')
                        ;
                    })
        })()

    </script>
</body>

</html>