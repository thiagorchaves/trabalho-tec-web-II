<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Estácio Web Projects</title>
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/semantic.css">
    <link rel="stylesheet" type="text/css" href="style-flexbox.css">

</head>

<body>
    <div class="wrapper">

        <!--HEADER-->
        <header class="header-topo">

            <nav class="nav">
                <div class="ui secondary pointing menu">
                    <a class="item " style="color: white;">
                        Home
                    </a>
                    <a href="index.php"class="item " style="color: white;">
                        Projetos
                    </a>
                    <a href="cadastra.php"class="item active" style="color: white;">
                        Cadastrar projeto
                    </a>
                    <a href="sobreNos.php" class="item" style="color: white;">
                        Sobre nós
                    </a>
                    <div class="right menu">
                    <a href="painel.php" class="ui item" style="color: white;">
                            Painel de Controle
                        </a>
                        <a class="ui item" style="color: white;">
                            Logout
                        </a>
                    </div>
                </div>

            </nav>
            

        </header>
        <h1 style="padding: 0px; margin: 0px ; flex: 1 100%;   color: white;
        text-shadow: 2px 2px 2px black; font-size: 40px;  ">Estácio Web Projects</h1>
        
        <!--MENU NAVEGAÇÃO-->


        <!--PRINCIPAL-->
        <main class="main">


            <div class="ui segment">
                <h2 class="ui right floated header">Cadastrar Projeto</h2>
                <div class="ui clearing divider"></div>
               
            </div>

                        <div class="ui segment " style="margin: 50px; background: rgba(224, 223, 235, 0.8) ">
                <form class="ui form">
                <div class="ui form">
                    <div class="inline fields">
                        <div class="eight wide field">
                        <label>Nome do Projeto</label>
                        <input type="text" placeholder="Digite o nome do projeto">
                        </div>
                        <div class="three wide field">
                        <input type="text" placeholder="">
                        </div>
                        <div class="five wide field">
                        <input type="text" placeholder="">
                        </div>
                    </div>
                    <div class="inline field">
                        <div class="ui checkbox">
                        <input type="checkbox" tabindex="0" class="hidden">
                        <label>Checkbox</label>
                        </div>
                    </div>
                    <div class="inline field">
                        <div class="ui toggle checkbox">
                            <input type="checkbox" tabindex="0" class="hidden">
                            <label>Toggle</label>
                        </div>
                    </div>
                    
                    <div class="inline fields">
                        <label>What's your favorite fruit?</label>
                        <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="fruit" tabindex="0" class="hidden">
                            <label>Apples</label>
                        </div>
                        </div>
                        <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="fruit" tabindex="0" class="hidden">
                            <label>Oranges</label>
                        </div>
                        </div>
                        <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="fruit" tabindex="0" class="hidden">
                            <label>Pears</label>
                        </div>
                        </div>
                        <div class="field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="fruit" tabindex="0" class="hidden">
                            <label>Grapefruit</label>
                        </div>
                        </div>
                    </div>
                    <div class="inline field">
                                <label>Descrição do projeto</label>
                                <textarea style="margin-top: 0px; margin-bottom: 0px; height: 112px;"></textarea>
                            </div>
                </div>
                </form>
            </div>



        </main>

        <aside class="aside-esq">
            <div class="ui vertical menu">
                <h2>Acesso rápido</h2>
                <div class="item">
                    <div class="header">Top 3 - PHP</div>
                    <div class="menu">
                        <a class="item">Gestao Financeira</a>
                        <a class="item">App xibil</a>
                    </div>
                </div>
                <div class="item">
                    <div class="header">Aplicativos móveis</div>
                    <div class="menu">
                        <a class="item">Reac-Native</a>
                        <a class="item">Android Studio</a>
                        <a class="item">X-Code</a>
                    </div>
                </div>
                <div class="item">
                    <div class="header"></div>
                    <div class="menu">
                        <a class="item">Shared</a>
                        <a class="item">Dedicated</a>
                    </div>
                </div>
                <div class="item">
                    <div class="header">Support</div>
                    <div class="menu">
                        <a class="item">E-mail Support</a>
                        <a class="item">FAQs</a>
                    </div>
                </div>
            </div>
        </aside>

        <footer class="footer">Footer</footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="Semantic-UI-CSS-master/semantic.min.js"></script>

        <script>
        (function(){
            $('.ui.checkbox')
        .checkbox()
        ;
        })()

    </script>
</body>

</html>