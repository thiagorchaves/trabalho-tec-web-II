<?php
	if(isset($_POST['salvar'])){
            
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $radioGit;
        $url_git = $_POST["urlGit"];
        $radioOn;
        $url_online = $_POST["urlOnline"];
        $categoria = $_POST["combobox"];
        $selecionados; //tecnologias selecionadas
        $str_tecnologias; 
        $desafios = $_POST["desafios"];


        //TRATAMENTO - RADIO GIT
        if( isset($_POST["radioGit"]) ){
            $radioGit = $_POST["radioGit"];
        }
        //TRATAMENTO - RADIO ONLINE
        if ( isset($_POST["radioOn"]) ){
            $radioOn = $_POST["radioOn"];
        }

        /*TRATAMENTO - CHECKBOX*/
        if( isset($_POST["tecnologia"]) ){
            $selecionados = $_POST["tecnologia"];
            $str_tecnologias = implode(',',  $selecionados); //converte para string
            
        }


        $sql = "INSERT INTO project (nome, description, have_git, link_git, online, link_on, categoria, tecnologias,comentario) VALUES (
            '$nome', '$descricao', '$radioGit','$url_git', '$radioOn', '$url_online' ,'$categoria', '$str_tecnologias', '$desafios')";

        //importa a conexao com o banco
        include 'banco/conecta.php';

        //execucao da query

        $sql = mysqli_query($conexao,$sql) or die ("Houve erro na gravação dos dados, por favor, clique em voltar e verifique os campos obrigatórios!");
        
        header("Location: controle.php");

}else{
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
                    <a href="cadastra.php" class="item active" style="font-size: 14px;color:#365572; text-transform: uppercase; background: rgb(114, 150, 171,0.4);">
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
                </div>

            </nav>


        </header>
        <div>
        <h1 class="h1-logo">Estácio Web Projects</h1>
        </div>

        <!--PRINCIPAL-->
        <main class="main">
            <div class="ui segment">
                <h2 class="ui right floated header">Cadastrar Projeto</h2>
                <div class="ui clearing divider"></div>
            </div>


            <div class="ui segment " style="margin: 0 50px 10px; background: rgba(224, 223, 235, 0.8) ">
                <form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="ui form">
                        <!--Nome-->
                        <div class="inline fields">
                            <label>Nome do Projeto</label>
                            <input type="text" name="nome" placeholder="Digite o nome do projeto">
                        </div>
                        <!--Descricao-->
                        <div class="inline fields">
                            <label>Descrição</label>
                            <textarea rows="2" name="descricao" style="height: 73px;" placeholder="Fale com poucas palavras do que se trata o projeto"></textarea>
                        </div>
                        <!--Radio + link do Git-->
                        <div class="two fields">
                            <div class="field">
                                <label>O projeto está no GitHub?</label>

                                <div class="ui radio checkbox">
                                    <input type="radio" name="radioGit" value="1" class="hidden">
                                    <label>Sim</label>
                                </div>


                                <div class="ui radio checkbox">
                                    <input type="radio" name="radioGit" value="0" class="hidden">
                                    <label>Não</label>
                                </div>

                            </div>
                            <div class="field">
                                <label>Link GitHub</label>
                                <input type="text" name="urlGit" placeholder="Digite a URL do Github">
                            </div>
                        </div>
                        <!--online? + link do on-->
                        <div class="two fields">
                            <div class="field">
                                <label>O sistema está no online?</label>

                                <div class="ui radio checkbox">
                                    <input type="radio" name="radioOn" value="1" class="hidden">
                                    <label>Sim</label>
                                </div>

                                <div class="ui radio checkbox">
                                    <input type="radio" name="radioOn" value="0" class="hidden">
                                    <label>Não</label>
                                </div>

                            </div>
                              <!--online?-->
                             <div class="field">
                                <label>Link do sistema</label>
                                <input type="text" name="urlOnline" placeholder="Digite a URL do projeto">
                            </div>
                        </div>
                        <!--Categoria-->
                            <div class="field">
                                <label>Categoria</label>
                                <select name="combobox"class="ui search dropdown">
                                    <option value="games">Games</option>
                                    <option value="esportes">Esportes</option>
                                    <option value="política">Política</option>
                                    <option value="nerd">Nerd</option>
                                    <option value="adulto">Adulto</option>
                                    <option value="outros">Outros</option>
                                </select>
                            </div>
                        <!--Tecnologias-->
                        <div class="field">
                            <label>Quais Tecnologias foram usadas?</label>
                            <div class="ui checkbox">
                                <input type="checkbox" name="tecnologia[]" class="hidden" value="HTML">
                                <label>HTML</label>
                            </div>
                            <div class="ui checkbox">
                            <input type="checkbox"  name="tecnologia[]" class="hidden" value="CSS">
                                <label>CSS</label>
                            </div>
                            <div class="ui checkbox">
                            <input type="checkbox"  name="tecnologia[]"class="hidden" value="JavaScript">
                                <label>JavaScript</label>
                            </div>
                            <div class="ui checkbox">
                            <input type="checkbox"  name="tecnologia[]" class="hidden" value="JQuery">
                                <label>JQuery</label>
                            </div>
                            <div class="ui checkbox">
                            <input type="checkbox"  name="tecnologia[]"class="hidden" value="BootStrap">
                                <label>BootStrap</label>
                            </div>
                            <div class="ui checkbox">
                            <input type="checkbox"  name="tecnologia[]"class="hidden" value="MySql">
                                <label>MySql</label>
                            </div>
                            <div class="ui checkbox">
                            <input type="checkbox" name="tecnologia[]"class="hidden" value="Outros">
                                <label>Outros</label>
                            </div>
                        </div>
                        <!--Desafios-->
                        <div class="field">
                            <label>Quais foram os maiores desafios para construir esse projeto?</label>
                            <textarea style="margin-top: 0px; margin-bottom: 0px; height: 112px;" name="desafios"></textarea>
                        </div>
                        <div class="field">

                             <input type="submit" value="Salvar" name="salvar" class="ui black button" >
                        </div>                    
                </form>
            </div>
        </main>

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
            
          
        })()

    </script>

    
<?php
}//Fechando o else
?>
</body>

</html>