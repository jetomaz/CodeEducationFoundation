<?php
/*
 * Ola Wesley, eu montei as rotas da forma que eu entendi, validando
 * com rotas registradas em um array, porem não sei se consegui cobrir todos
 * os casos de tentativa de acesso, fiz tambem os acertos que ficaram pendentes
 * da primeira parte do projeto
 *
 */

// função para validar as rotas
function ValidaRotas( $param) {

    $flag = file_exists($param[1].'php');
    if($flag=='FALSE'){
        header("location:404.php");
    }

    // se o arquivo existe valida as rotas
    $rotasValidas = array("contato","empresa","produtos","servicos");

    if( in_array( $param[1], $rotasValidas)) {
        if ($param[1] == 'empresa') {
            header("location:empresa.php?menu=2");
        }
        if ($param[1] == 'produtos') {
            header("location:produtos.php?menu=3");
        }
        if ($param[1] == 'servicos') {
            header("location:servicos.php?menu=4");
        }
        if ($param[1] == 'contato') {
            header("location:contato.php?menu=5");
        }
    }else{
        header("location:404.php");
    }

}

$dados_url  = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$enderecoDigitado = explode('/',$dados_url['path'],2);
$enderecoDigitado[1] = str_replace('.php', '', $enderecoDigitado[1]);

// se for index ou se nao tiver parametro nem valida ele ja abre o index.php
if($enderecoDigitado[1]!='index' && $enderecoDigitado[1]!=''){
    ValidaRotas($enderecoDigitado);
}
?>

<!-- incluindo o cabecalho -->
<?php require_once("cabecalho.php"); ?>

<!-- incluindo o menu -->
<?php  require_once("menu.php");  ?>

<!-- incluindo o conteudo -->
<?php  require_once("conteudo.php");  ?>

<!-- incluindo o rodape -->
<?php require_once("rodape.php"); ?>



