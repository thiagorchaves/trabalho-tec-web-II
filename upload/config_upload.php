<?php
//config_upload.php
//limitar as extens�es ? (sim ou nao)
$limitar_ext = "sim";

//extens�es autorizadas
$extensoes_validas = array(".gif",".jpg",".jpeg",".png",".PNG",".JPG",".JPEG");

//Onde os arquivos ser�o armazenados (Voc� deve ter permiss�o de escrita neste diret�rio)
$caminho_absoluto = "../img/projetos";

//limitar o tamanho ?
$limitar_tamanho="sim";

//Tamanho limitado
$tamanho_bytes="2000000";

//Se o arquivo j� existir, sobrescrever ?(sim ou n�o)
$sobrescrever = "nao";
?>