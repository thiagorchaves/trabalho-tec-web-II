<?php
//exibir.php
$diretorio="file";

//foreach (scandir($diretorio) as $arquivos){
//echo $arquivos."<br />";
//}
//echo "<br /><br /><br />";

/*
scandir - Lista os arquivos e diret�rios que est�o no caminho especificado

Descri��o
array scandir ( string directory [, int sorting_order [, resource context]] )
Retorna um array de arquivos e diret�rios dentro de directory. 

Par�metros
directory
O diret�rio que ser� pesquisado. 

sorting_order
Por padr�o, a lista est� em ordem alfab�tica ascendente (menor para maior). Se o par�metro opcional sorting_order for usado (com o valor 1), ent�o a lista ser� ordenada de maneira descendente. 

context
Para uma descri��o do par�metro context veja a se��o de streams do manual. 

Valores de retornado
Retorna umarray com nomes de arquivos se tiver sucesso, ou FALSE em caso de erro. Se directory n�o for um diret�rio, ent�o FALSE � retornado e um erro de n�vel E_WARNING � gerado. 
*/

//Exibindo uma ou v�rias extens�es espec�ficas
$total = glob("$diretorio/{*.jpg}",GLOB_BRACE);
foreach ( $total as $arquivos){
echo "nome:".$arquivos."<br /> Tamanho:".filesize($arquivos). "<hr />" ;
//echo "<img src='$arquivos'>";
}
/*
glob - Localiza diret�rios/arquivos que combinem com o padr�o

Descri��o
array glob ( string pattern [, int flags] )

A fun��o glob() procura por todos os caminhos de arquivos que batem com o padr�o pattern de acordo com as regras do sistema operacional. Nenhuma expans�o ou substitui��o de vari�vel � realizada. 
Retorna um array contendo os arquivos/diret�rios localizados ou FALSE em caso de erro. 

Flags v�lidas: 
GLOB_MARK - Acrescenta um h�fem a cada item retornado 
GLOB_NOSORT - Retornam os arquivos confome eles aparecem no diret�rio (sem ordena��o) 
GLOB_NOCHECK - Retorna o padr�o de busca se nenhum arquivo for encontrado 
GLOB_NOESCAPE - Evita contra-barras para metacaracteres 
GLOB_BRACE - Expande {a,b,c} para procurar 'a', 'b', ou 'c' 
GLOB_ONLYDIR - Retorna somente diret�rios que batam com o padr�o (sem arquivos) 
*/

//Total de arquivos exibidos
$total=count($ARQU = glob("$diretorio/{*.jpg,*.txt}", GLOB_BRACE));
echo "<br />Total de arquivos encontrados:".$total;
?>