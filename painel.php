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
            <!--MENU NAVEGAÇÃO-->
            <nav class="nav">
                <div class="ui secondary pointing menu">
                    <a class="item " style="color: white;">
                        Home
                    </a>
                    <a href="index.php"class="item " style="color: white;">
                        Projetos
                    </a>
                    <a href="cadastra.php"class="item " style="color: white;">
                        Cadastrar projeto
                    </a>
                    <a href="sobreNos.php" class="item" style="color: white;">
                        Sobre nós
                    </a>
                    <div class="right menu">
                    <a class="ui item active" style="color: white;">
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
        


        <!--PRINCIPAL-->
        <main class="main">


            <div class="ui segment">
                <h2 class="ui right floated header">Seus projetos cadastrados</h2>
                <div class="ui clearing divider"></div>
               
            </div>

            <div class="ui segment " style="margin: 50px; background: rgba(224, 223, 235, 0.8) ">
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
        <td>Projeto Financeiro </td>
        <td>Projeto Financeiro </td>

              <td>
       <div class="ui small basic icon buttons">
            <button class="ui button"><i class="edit icon"></i></button>
        </div>
      </td>
      <td>
        <div class="ui small basic icon buttons">
            <button class="ui button"><i class="remove icon"></i></button>
        </div>
      </td>
    </tr>

     <tr>
        <td>Projeto Financeiro </td>
        <td>10/08/2018</td>
        <td>Projeto Financeiro </td>
        <td>Projeto Financeiro </td>

              <td>
       <div class="ui small basic icon buttons">
            <button class="ui button"><i class="edit icon"></i></button>
        </div>
      </td>
      <td>
        <div class="ui small basic icon buttons">
            <button class="ui button"><i class="remove icon"></i></button>
        </div>
      </td>
    </tr>

    <tr>
    <td>Projeto Financeiro </td>
    <td>10/08/2018</td>
      <td>John Lilki</td>
      <td>September 14, 2013</td>
      <td>
       <div class="ui small basic icon buttons">
            <button class="ui button"><i class="edit icon"></i></button>
        </div>
      </td>
      <td>
        <div class="ui small basic icon buttons">
            <button class="ui button"><i class="remove icon"></i></button>
        </div>
      </td>
    </tr>
  
  </tbody>
</table>
            </div>



        </main>
<!--BARRA LATERAL-->
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
</body>

</html>