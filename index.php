<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login - Estácio Web Projects</title>
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/semantic.css">
    <link rel="stylesheet" href="./css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel:700" rel="stylesheet">
</head>

<body>
<h1 class="animated fadeInLeftBig h1Diff">Estácio Web Projects</h1>
<?php  if( isset($_SESSION['needLogin'])){         
            echo $_SESSION['needLogin']; 
            unset($_SESSION['needLogin']);
        }
        ?>
        <section>
            <div class="login-container">
                <h1>Fazer Login</h1>
              <?php  if( isset($_SESSION['error'])){         
            echo $_SESSION['error']; 
            unset($_SESSION['error']);
        }
        ?>
         <?php  if( isset($_SESSION['UserNotFound'])){         
            echo $_SESSION['UserNotFound']; 
            unset($_SESSION['UserNotFound']);
        }
        ?>
              <?php  if( isset($_SESSION['passError'])){         
            echo $_SESSION['passError']; 
            unset($_SESSION['passError']);
        }
        ?>
     
                <div class="ui placeholder segment" id="divLogin">
                    <div class="ui two column very relaxed stackable grid">
                        <div class="column">
                            <form class="ui form" action="login/login.php" method="POST">
                                <div class="field">
                                <label>Usuário</label>
                                <div class="ui left icon input">
                                    <input type="text" name="userName" placeholder="Digite o seu nome de usuário">
                                    <i class="user icon"></i>
                                </div>
                                </div>
                                <div class="field">
                                <label>Password</label>
                                <div class="ui left icon input">
                                    <input type="password" name="senha">
                                    <i class="lock icon"></i>
                                </div>
                                </div>
                                <input class="ui blue submit button  "type="submit" value="Entrar"></input>
                            </form>
                        </div>    
                        <div class="middle aligned column centralizado" >
                            <div class="ui big button" onclick="exibeFormCadastro()"><i class="signup icon"></i> Cadastrar </div>
                            </div>
                            
                        </div>
                        <div class="ui vertical divider">Ou </div>
                </div>
                              
                <div class="ui placeholder segment" id="divCreateUser" style="display : none">
                    <div class="ui two column very relaxed stackable grid">
                        <div class="column">
                            <form class="ui form" action="login/cadastrar.php" method="POST">
                                <div class="field">
                                <label>Usuário</label>
                                <div class="ui left icon input">
                                    <input type="text" name="userName" placeholder="Digite o seu nome de usuário">
                                    <i class="user icon"></i>
                                </div>
                                </div>
                                <div class="field">
                                    <label>Nome</label>
                                    <div class="ui left icon input">
                                        <input type="text" name="name" placeholder="Digite o seu nome">
                                        <i class="user icon"></i>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>E-mail</label>
                                    <div class="ui left icon input">
                                        <input type="email" name="email" placeholder="Digite o seu nome de email">
                                        <i class="user icon"></i>
                                    </div>
                                </div>
                                <div class="field">
                                <label>Password</label>
                                <div class="ui left icon input">
                                    <input type="password" name="criaSenha">
                                    <i class="lock icon"></i>
                                </div>
                                </div>
                                <input class="ui blue submit button  "type="submit" value="Cadastrar"></input>
                            </form>
                        </div>

                        <div class="middle aligned column centralizado">
                            <div class="ui big button" onclick="exibeFormCadastro()"><i class="signup icon"></i> Logar </div>
                            </div>
                        </div>
                        <div class="ui vertical divider">Ou </div>
                </div>
                
            </div> 
        </section>

    <script src="js/jquery.min.js"></script>
    <script src="Semantic-UI-CSS-master/semantic.min.js"></script>
    <script>
            function exibeFormCadastro(){
            $divCreateUser = document.querySelector("#divCreateUser");
            $divLogin = document.querySelector("#divLogin");
            $h1LoginContainer = document.querySelector(".login-container h1");

            if($divCreateUser.style.display == "block"){
            
              $divCreateUser.style.display = "none";
              $divLogin.style.display = "block";
              $h1LoginContainer.textContent = "Fazer Login";
          }else{
            $h1LoginContainer.textContent = "Cadastrar-se no Sistema";
            $divCreateUser.style.display = "block";
            $divLogin.style.display = "none";
          }
            }

             $('.message .close')
                    .on('click', function() {
                        $(this)
                        .closest('.message')
                        .transition('fade')
                        ;
                    })


    </script>
</body>

</html>
