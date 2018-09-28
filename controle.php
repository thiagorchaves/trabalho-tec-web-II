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

            <div class="ui segment " style="margin: 50px;">
            <div class="field">
                             <button class="ui black button" onclick="window.open('cadastra.php','_self')">Cadastrar novo projeto</button>
                        </div>   
                <table class="ui striped table">
                    <thead>
                        <tr>
                        <th>Nome Projeto</th>
                        <th>Data</th>
                        <th>Detalhes</th>
                        <th>Detalhes</th>
                        <th>Alterar</th>
                        <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Projeto Financeiro </td>
                            <td>10/08/2018</td>
                            <td>outra coisa</td>
                            <td><a>Mais detalhes</a></td>

                        <td>
                            <div class="ui small basic icon buttons">
                                    <a  class="ui button" href="edita.php"><i class="edit icon"></i></a>
                                </div>
                        </td>
                        <td>
                            <div class="ui small basic icon buttons">
                                <a class="ui button" onclick="mostraModal()"><i  id="remover"class="remove icon"></i></a>
                           
                                <!--MODAL EXCLUSAO-->
                                <div class="ui tiny modal">
                                <div class="header">Tem certeza que deseja excluir o Projeto?</div>
                                    <div class="actions">
                                        <div class="ui approve red button">Cancelar</div>
                                        <div class="ui cancel green button">Excluir</div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        </tr>

                                            
                    </tbody>
                </table>

        </main>
   
        <footer class="footer">Footer</footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="Semantic-UI-CSS-master/semantic.min.js"></script>
    <script>
    (function(){
  
    })()
    function mostraModal(){
        $('.tiny.modal')
  .modal('show')
;
        console.log("clickou")
    }

    </script>
</body>

</html>