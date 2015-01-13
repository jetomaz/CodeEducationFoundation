<?php
/*
 * Ola Wesley, eu montei as rotas da forma que eu entendi, validando
 * com rotas registradas em um array, porem não sei se consegui cobrir todos
 * os casos de tentativa de acesso, fiz tambem os acertos que ficaram pendentes
 * da primeira parte do projeto
 *
 * 12-01-2014
 * Ola Wesley, eu nunca trabalhei com rotas assim na mão,
 * sempre trabalhei com menu simples chamando arquivos .php
 * fiz da forma que entendi, espero que de certo. att.  Eduardo
 *
 */

// função para validar as rotas
function ValidaRotas($param) {

    // se o arquivo existe valida as rotas
    $rotasValidas = array("index","contato","empresa","produtos","servicos","");

    if( in_array( $param[1], $rotasValidas)) {
        if ($param[1] == 'empresa') {
            $menu=2;
            require_once("empresa.php");
        }
        if ($param[1] == 'produtos') {
            $menu=3;
            require_once("produtos.php");
        }
        if ($param[1] == 'servicos') {
            $menu=4;
            include("servicos.php");
        }
        if ($param[1] == 'contato') {
            $menu=5;
            require_once("contato.php");
        }
        if ($param[1] == 'index' || $param[1] == '') {
            // incluindo o cabecalho
            require_once("cabecalho.php");
            // incluindo o menu
            $menu=1;
            require_once("menu.php");
            // incluindo o conteudo
            require_once("conteudo.php");
            // incluindo o rodape
            require_once("rodape.php");
        }
    }else{
        $menu=1;
        require_once("404.php");
    }

}

$dados_url  = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$enderecoDigitado = explode('/',$dados_url['path'],2);
$enderecoDigitado[1] = str_replace('.php', '', $enderecoDigitado[1]);

ValidaRotas($enderecoDigitado);

?>








