<?php
include "login/validar.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Sobre nós - Estácio Web Projects</title>
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/semantic.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="./css/animate.min.css">
</head>

<body>
    <div class="wrapper">

        <!--HEADER-->
        <?php include "menu.php";?>
        <div>
        <h1 class="h1-logo animated fadeInLeftBig">Estácio Web Projects</h1>
        </div>
        
        <!--MENU NAVEGAÇÃO-->


        <!--PRINCIPAL-->
        <main class="main">


            <div class="ui segment">
                <h2 class="ui right floated header">Sobre Nós</h2>
                <div class="ui clearing divider"></div>
               
            </div>
            
            <div class="ui segment " style="margin: 0 50px 10px; background: rgba(224, 223, 235, 0.8) ">
            <img  class="ui large left floated image" src="img/quadrado.png"/>
            <h4 style="margin-top:20px" class="ui horizontal divider header">
                <i class="child icon"></i>
                Nossa Motivação
                </h4>
                <p  class="centralizado" style="margin: auto 10%;">O projeto surgiu com a finalizade de centralizar os projetos desenvolvidos pelos
                alunos de TI da Estácio. Estimulando-os a implementarem na prática os conhecimentos adquiridos
                na faculdade. </p>
                <h4 style="margin-top:90px" class="ui horizontal divider header">
                <i class="user secret icon"></i>
                Desenvolvedores     
                </h4>
            <div class="ui centered cards" >
            <div class="card animated bounceInLeft">
                <div class="image">
                <img src="img/thiago.jpg">
                </div>
                <div class="content">
                <div class="header">Thiago Romualdo</div>
                <div class="meta">
                <a href="https://www.linkedin.com/in/thiago-chaves-6759a622/" target="blank">LinkedIn <i class="linkedin icon"></i></a>
                </div>
                <div class="description">
                    Thiago é Analista de Infraestrutura e aspirante a Desenvolvedor Web
                </div>
                </div>
 
  </div>

  <div class="card animated bounceInRight">
    <div class="image">
      <img src="img/paulo.jpg">
    </div>
    <div class="content">
      <div class="header">Paulo Tarcisio</div>
      <div class="meta">
      <a href="https://www.linkedin.com/in/paulo-tarcisio-874774a4/" target="blank">LinkedIn <i class="linkedin icon"></i></a>
      </div>
      <div class="description">
        Tarcisio é estágiario e aspirante a Desenvolvedor Web
      </div>
    </div>
  </div>
</div>
            </div>

        </main>

        <footer class="footer centralizado">
          <p>Copyright <i class="copyright outline icon"></i>  - Paulo Tarcisio, Thiago Romualdo - 2018</p>
        </footer>
    </div>

     <script src="js/jquery.min.js"></script>
    <script src="Semantic-UI-CSS-master/semantic.min.js"></script>
</body>

</html>