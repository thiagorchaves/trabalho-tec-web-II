<?php
//exibir.php
$diretorio="file";

//foreach (scandir($diretorio) as $arquivos){
//echo $arquivos."<br />";
//}
//echo "<br /><br /><br />";

/*
scandir - Lista os arquivos e diretórios que estão no caminho especificado

Descrição
array scandir ( string directory [, int sorting_order [, resource context]] )
Retorna um array de arquivos e diretórios dentro de directory. 

Parâmetros
directory
O diretório que será pesquisado. 

sorting_order
Por padrão, a lista está em ordem alfabética ascendente (menor para maior). Se o parâmetro opcional sorting_order for usado (com o valor 1), então a lista será ordenada de maneira descendente. 

context
Para uma descrição do parâmetro context veja a seção de streams do manual. 

Valores de retornado
Retorna umarray com nomes de arquivos se tiver sucesso, ou FALSE em caso de erro. Se directory não for um diretório, então FALSE é retornado e um erro de nível E_WARNING é gerado. 
*/

//Exibindo uma ou várias extensões específicas
$total = glob("$diretorio/{*.jpg}",GLOB_BRACE);
foreach ( $total as $arquivos){
echo "nome:".$arquivos."<br /> Tamanho:".filesize($arquivos). "<hr />" ;
//echo "<img src='$arquivos'>";
}
/*
glob - Localiza diretórios/arquivos que combinem com o padrão

Descrição
array glob ( string pattern [, int flags] )

A função glob() procura por todos os caminhos de arquivos que batem com o padrão pattern de acordo com as regras do sistema operacional. Nenhuma expansão ou substituição de variável é realizada. 
Retorna um array contendo os arquivos/diretórios localizados ou FALSE em caso de erro. 

Flags válidas: 
GLOB_MARK - Acrescenta um hífem a cada item retornado 
GLOB_NOSORT - Retornam os arquivos confome eles aparecem no diretório (sem ordenação) 
GLOB_NOCHECK - Retorna o padrão de busca se nenhum arquivo for encontrado 
GLOB_NOESCAPE - Evita contra-barras para metacaracteres 
GLOB_BRACE - Expande {a,b,c} para procurar 'a', 'b', ou 'c' 
GLOB_ONLYDIR - Retorna somente diretórios que batam com o padrão (sem arquivos) 
*/

//Total de arquivos exibidos
$total=count($ARQU = glob("$diretorio/{*.jpg,*.txt}", GLOB_BRACE));
echo "<br />Total de arquivos encontrados:".$total;
?>