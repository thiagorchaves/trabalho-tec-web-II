<?php
set_time_limit(0);

$nomeImg = $_FILES['arquivo']['name'];

$tamanho = $_FILES['arquivo']['size'];

$temp = $_FILES['arquivo']['tmp_name'];

$extensao = pathinfo($_FILES['arquivo']['name']);
$extensao = ".".$extensao['extension'];
$nomeImg = time().uniqid(md5()).$extensao;

	if(!empty($temp))
	{
		$caminho_absoluto = "../img/projetos";
		$extensoes_validas = array(".gif",".jpg",".jpeg",".png",".PNG",".JPG",".JPEG");
		$ext = strrchr($nomeImg,'.');
		
			if(!in_array($ext,$extensoes_validas))
			{   	
				$_SESSION['imgError'] = "<div class='ui negative floating message' style='margin: 0px 20px 20px 20px' ><i  class='close icon'></i><div class='header'>Extensão Inválida!</div></div>";
				$validado = false;
			}else{
				move_uploaded_file("$temp","$caminho_absoluto/$nomeImg");
			}		
	}
	else
	{
		$_SESSION['imgError'] = "error";
		$validado = false;
	}


?>