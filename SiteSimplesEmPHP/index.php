<?php
$dados_url  = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$enderecoDigitado = explode('/',$dados_url['path'],2);
$enderecoDigitado[1] = str_replace('.php', '', $enderecoDigitado[1]);

if(!(is_file($enderecoDigitado[1].".php"))){
    header("HTTP/1.0 404 Not Found");
}

ValidaRotas($enderecoDigitado);

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
 *
 * 13/01/2014
 * Boa nooite, wesley me desculpe mas eu nao entendi, nao entendo o que o
 * header("HTTP/1.0 404 Not Found"); ou o http_response_code(404); fazem no servidor interno
 * do php, ao meu ver se o arquivo nao existe eu devo redirecionar para uma pagina 404
 * com o header(location) porem voce me disse que nao sair da pagina index, portando usando
 * essas funções que voce me passou nao funcionou da forma que eu esperava e eu nao entendi,
 * me desculpe mais nunca usei redirecionamento de rotas desta forma e os videos tambem nunca
 * mencionaram essas funções, estou um pouco preocupado com o que esta acontecendo porque tem
 * coisas que estão sendo cobradas nos projetos que nao estão sendo ensinadas nos videos, estou
 * me sentindo um pouco desconfortavel com isso, caso voce queira conversar diretamente meu email
 * é jetomaz@gmail.com, estou preocupado pois estou atrazado 2 modulos e não estou conseguindo entender
 * o que esta sendo pedido nos projetos.
 * Att.
 *
 * Eduardo
 *
 */

// função para validar as rotas
function ValidaRotas($param) {

    if($param[1]==""){
        $param[1]="index";
    }
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
        http_response_code(404);
    }

}
?>