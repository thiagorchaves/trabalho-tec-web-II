 <?php
session_start();
 include 'banco/conecta.php'; 
if(isset($_POST['editar'])) {
    include 'banco/edit.php';
}else{             
                      
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

    //Tratar input Radio
    if($radioGit == 1){ 
        $radioGitSim = 'checked';
        $radioGitNao = "";
    }else{
        $radioGitSim = '';
        $radioGitNao = "checked";
    }

    if($radioOn == 1){
        $radioOnSim = "checked";
        $radioOnNao = "";
    }else{
        $radioOnSim = "";
        $radioOnNao = "checked";
    }

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
                    <a class="ui item" style="font-size: 14px;color:#365572; text-transform: uppercase;">
                        Logout
                    </a>
                </div>
            </nav>


        </header>
        <div>
        <h1 class="h1-logo">Estácio Web Projects</h1>
        </div>

       
          <!--PRINCIPAL-->        
        <main class="main">
            <div class="ui segment">
                <h2 class="ui right floated header">Editar Projeto: <?php echo $nome; ?></h2>
                <div class="ui clearing divider"></div>
            </div>
             <!-- mensagem de sucesso-->
        <?php  if( isset($_SESSION['msg'])){  ?>        
            <?php echo $_SESSION['msg']; unset($_SESSION['msg']);?>
       <?php
       }
        ?>   
            <div class="ui segment " style="margin: 0 50px 10px; background: rgba(224, 223, 235, 0.8) ">
                <form class="ui form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

 <!--Nome-->
 <div class="inline fields">
     <label>Nome do Projeto</label>
     <input type="text" name="id" value="<?php echo $id; ?>" hidden>
     <input type="text" name="nome" value="<?php echo $nome; ?>" >
 </div>
 <!--Descricao-->
 <div class="inline fields">
     <label>Descrição</label>
     <textarea rows="2" name="descricao" style="height: 73px;"><?php echo $descricao; ?></textarea>
 </div>
 <!--Git-->
 <div class="two fields">
     <div class="field">
         <label>O projeto está no GitHub?</label>
         <div class="ui radio checkbox">
             <input type="radio" name="radioGit" value="1"<?php echo $radioGitSim?> >
             <label>Sim</label>
         </div>

         <div class="ui radio checkbox">
             <input type="radio" name="radioGit" value="0"<?php echo $radioGitNao?> >
             <label>Não</label>
         </div>
     </div>
     <div class="field">
         <label>Link GitHub</label>
         <input type="text" name="urlGit" value="<?php echo $url_git; ?>">
     </div>
 </div>
  <!--online? + link do on-->
  <div class="two fields">
     <div class="field">
         <label>O sistema está no online?</label>

         <div class="ui radio checkbox">
             <input type="radio" name="radioOn" value="1"<?php echo $radioOnSim?>>
             <label>Sim</label>
         </div>

         <div class="ui radio checkbox">
             <input type="radio" name="radioOn" value="0"<?php echo $radioOnNao?>>
             <label>Não</label>
         </div>

     </div>
       <!--online?-->
      <div class="field">
         <label>Link do sistema</label>
         <input type="text" name="urlOnline" value="<?php echo $url_online; ?>">
     </div>
 </div>
 <!--Categoria-->
     <div class="field">
         <label>Categoria</label>
         <select name="combobox"class="ui search dropdown">
             <option value="games" <?php echo $valor=($categoria == 'games')? 'selected': ''?> >Games</option>
             <option value="esportes" <?php echo $valor=($categoria == 'esportes')? 'selected':''?> >Esportes</option>
             <option value="política" <?php echo $valor=($categoria == 'política')?  'selected':''?> >Política</option>
             <option value="nerd" <?php echo $valor=($categoria == 'nerd')?  'selected':''?>>Nerd</option>
             <option value="adulto" <?php echo $valor=($categoria == 'adulto')?  'selected':''?>>Adulto</option>
             <option value="outros" <?php echo $valor=($categoria == 'outros')?  'selected':''?>>Outros</option>
         </select>
     </div>
 <!--Tecnologias-->
 <div class="field">
     <label>Quais Tecnologias foram usadas?</label>
     <div class="ui checkbox">
         <input type="checkbox" name="tecnologia[]" class="hidden" value="HTML" <?php echo $HTML; ?>>
         <label>HTML</label>
     </div>
     <div class="ui checkbox">
     <input type="checkbox"  name="tecnologia[]" class="hidden" value="CSS" <?php echo $CSS; ?>>
         <label>CSS</label>
     </div>
     <div class="ui checkbox">
     <input type="checkbox"  name="tecnologia[]"class="hidden" value="JavaScript" <?php echo $JAVASCRIPT; ?>>
         <label>JavaScript</label>
     </div>
     <div class="ui checkbox">
     <input type="checkbox"  name="tecnologia[]" class="hidden" value="JQuery" <?php echo $JQUERY; ?>> 
         <label>JQuery</label>
     </div>
     <div class="ui checkbox">
     <input type="checkbox"  name="tecnologia[]"class="hidden" value="BootStrap" <?php echo $BOOTSTRAP; ?>>
         <label>BootStrap</label>
     </div>
     <div class="ui checkbox">
     <input type="checkbox"  name="tecnologia[]"class="hidden" value="MySql" <?php echo $MYSQL; ?>>
         <label>MySql</label>
     </div>
     <div class="ui checkbox">
     <input type="checkbox" name="tecnologia[]"class="hidden" value="Outros" <?php echo $OUTROS; ?>>
         <label>Outros</label>
     </div>
 </div>
 <!--Desafios-->
 <div class="field">
     <label>Quais foram os maiores desafios para construir esse projeto?</label>
     <textarea style="margin-top: 0px; margin-bottom: 0px; height: 112px;" name="desafios"><?php echo $comentario; ?></textarea>
 </div>
 <div class="field">

      <a href="edita.php?id=<?php echo$id?>"><input type="submit" value="Editar" name="editar" class="ui black button" ></a>
 </div>                    
                </form>
            </div>
        </main>
        
<?php
}//fechando while
?>
    <footer class="footer">Footer</footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="Semantic-UI-CSS-master/semantic.min.js"></script>

    <script>
        (function () {
            $('select.dropdown')
                .dropdown()
                ;
            $('.ui.checkbox')
                .checkbox()
                ;
         $('.message .close')
                    .on('click', function() {
 $(this)
 .closest('.message')
 .transition('fade')
 ;
                    })
        })()

    </script>
 <?php
 }//fechando o else
  ?>   
</body>

</html>