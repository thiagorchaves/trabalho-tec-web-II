<?php
include "login/validar.php";

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
        <?php include "menu.php";?>
        <div>
            <h1 class="h1-logo animated fadeInLeftBig">Estácio Web Projects</h1>
        </div>
    <!--PRINCIPAL-->
        <main class="main">
            <div class="ui segment">
                <h2 class="ui right floated header">Cadastrar Projeto</h2>
                <div class="ui clearing divider"></div>
            </div>
        <!-- mensagem de sucesso-->
        <?php  
        if( isset($_SESSION['msg'])){         
            echo $_SESSION['msg']; 
            unset($_SESSION['msg']);
        }
        ?>
            <div class="ui segment " style="margin: 0 50px 10px; background: rgba(224, 223, 235, 0.8) ">
           
                <form  method="post"  name="upload" action="banco/create.php" class="ui form" enctype="multipart/form-data">
                        <!--Nome-->
                        <?php if( !empty($_SESSION['vazio_nome']) ){ echo "<p style='color:red;'>".$_SESSION['vazio_nome']."</p>"; }?>
                        <div class="field <?php if( !empty($_SESSION['vazio_nome']) ){echo "error"; unset ($_SESSION['vazio_nome']);}?> ">
                            <label>Nome do Projeto*</label>
                            <input type="text" name="nome" placeholder="Digite o nome do projeto" <?php if( !empty($_SESSION['value_nome']) ){echo "value='".$_SESSION['value_nome']."'"; unset ($_SESSION['value_nome']);}?>>
                        </div>
                          <!--MSG CAMPOS VAZIOS-->
                           
                        <!--Descricao-->
                        <div class="field <?php if( !empty($_SESSION['vazio_descricao']) ){echo "error";}?> ">
                            <!--campo obrigatorio-->
                        <?php if( !empty($_SESSION['vazio_descricao']) ){
                                echo "<p style='color:red;'>".$_SESSION['vazio_descricao']."</p>"; 
                                unset ($_SESSION['vazio_descricao']);
                            }?>
                            <label>Descrição*</label>
                            <textarea rows="2" name="descricao" style="height: 73px;" placeholder="Fale com poucas palavras do que se trata o projeto"><?php if( !empty($_SESSION['value_descricao']) ){
                                echo $_SESSION['value_descricao']; 
                                unset ($_SESSION['value_descricao']);
                            }?></textarea>
                        </div>

                        <div class="field <?php if( isset($_SESSION['imgError']) ){echo "error";
                        
                        }?> ">
                          <?php if( isset($_SESSION['imgError']) ){ echo "<p style='color:red;'>Selecione uma imagem com extesão .jpg ou .png ou jpeg.</p>"; 
                             unset ($_SESSION['imgError']);
                            }?>  
                            <input class='inputfile' type="file" name="arquivo" id="imgFile" 
                            placeholder="Selecione uma imagem que represente o projeto">
                          
                        </div>

                        <!--Radio + link do Git-->
                        <div class="two fields centralizado">
                            <div class="field">
                            <?php if( !empty($_SESSION['vazio_radioGit']) ){
                                echo "<p style='color:red;'>".$_SESSION['vazio_radioGit']."</p>"; 
                                unset ($_SESSION['vazio_radioGit']);
                            }?>
                            
                                <label><i class="github icon"></i>O projeto está no GitHub?</label>
                                <div class="ui radio checkbox">
                                    <input type="radio" name="radioGit" value="1" >
                                    <label>Sim</label>
                                </div>
                                <div class="ui radio checkbox">
                                    <input type="radio" name="radioGit" value="0" >
                                    <label>Não</label>
                                </div>
                            </div>
                             <div class="field">
                                <label>Link GitHub</label>
                                <input type="text" name="urlGit" placeholder="Digite a URL do Github">
                            </div>
                        </div>
                        <!--online? + link do on-->
                        <div class="two fields centralizado">
                            <div class="field">
                                <label><i class="server icon"></i>O sistema está online?</label>
                                <div class="ui radio checkbox">
                                    <input type="radio" name="radioOn" value="1" >
                                    <label>Sim</label>
                                </div>
                                <div class="ui radio checkbox">
                                    <input type="radio" name="radioOn" value="0" >
                                    <label>Não</label>
                                </div>
                            </div>
                              <!--online?-->
                             <div class="field">
                                <label>Link do sistema</label>
                                <input type="text" name="urlOnline" placeholder="Digite a URL do projeto" <?php if( !empty($_SESSION['value_urlOnline']) ){
                                 echo "value='".$_SESSION['value_urlOnline']."'"; 
                                unset ($_SESSION['value_urlOnline']);
                            }?>>
                            </div>
                        </div>
                        
                        <div class="two fields centralizado">
                            <!--Categoria-->
                                <div class="inline field">
                                    <label>Categoria</label>  
                                    <select name="combobox"class="ui search dropdown">
                                        <option value="">
                                            Selecione um opção
                                        </option>
                                        <option value="games">
                                            Games
                                        </option>
                                        <option value="esportes" >
                                            Esportes
                                        </option>
                                        <option value="política">Política</option>
                                        <option value="nerd">Nerd</option>
                                        <option value="adulto">Adulto</option>
                                        <option value="outros" >Outros</option>
                                    </select>
                                </div>
                            <!--Tecnologias-->
                            <div class="field centralizado">
                                <label>Quais Tecnologias foram usadas?</label>
                                <div class="ui checkbox">
                                    <input type="checkbox" name="tecnologia[]" class="hidden" value="HTML">
                                    <label>
                                    <i class="html5 icon"></i>
                                    HTML
                                    </label>
                                </div>
                                <div class="ui checkbox">
                                <input type="checkbox"  name="tecnologia[]" class="hidden" value="CSS">
                                    <label><i class="css3 alternate icon"></i>CSS</label>
                                </div>
                                <div class="ui checkbox">
                                <input type="checkbox"  name="tecnologia[]"class="hidden" value="JavaScript">
                                    <label><i class="js square icon"></i>JavaScript</label>
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
                        </div>
                        <!--Desafios-->
                        <div class="field centralizado <?php if( !empty($_SESSION['vazio_desafios']) ){echo "error";}?> ">
                       
                            <label>Quais foram os maiores desafios para construir esse projeto?*</label>
                            <?php if( !empty($_SESSION['vazio_desafios']) ){
                                echo "<p style='color:red;'>".$_SESSION['vazio_desafios']."</p>"; 
                                unset ($_SESSION['vazio_desafios']);
                            }?>
                            <textarea style="margin-top: 0px; margin-bottom: 0px; height: 112px;" name="desafios"><?php if( !empty($_SESSION['value_desafios']) ){
                                echo $_SESSION['value_desafios']; 
                                unset ($_SESSION['value_desafios']);
                            }?></textarea>
                        </div>
                        <div class="field">

                             <input type="submit" value="Salvar" name="salvar" class="ui black button" >
                        </div>                    
                </form>
            </div>
        </main>

     <footer class="footer centralizado">
          <p>Copyright <i class="copyright outline icon"></i>  - Paulo Tarcisio, Thiago Romualdo - 2018</p>
        </footer>

    </div><!--FECHANDO WRAPPER-->
    <script src="js/jquery.min.js"></script>
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
</body>
</html>