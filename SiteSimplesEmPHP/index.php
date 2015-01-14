<?php
require_once("cabecalho.php");
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
 *
 * 14/01/2014
 *
 * Boa tarde!
 *
 * Pessoal muito obrigado pela ajuda, agora sim entendi o que precisava ser feito, e entendi
 * tambem que esse procedimento vai ser fundamental na hora de montar url amigaveis, peço desculpas
 * por ter fica aflito mas assim são as pessoal, tenho que melhorar nisso tambem :)
 * Acabei usando a minha logica mesmo com a ajuda de voces e fiz algumas adequações,
 * espero que tenha ficado satisfatorio, Muito Obrigado!
 * ps: Eu testei forçando a rota pelo index.php com -- php -S localhost:8001 index.php
 *
 * Att.
 *
 * Eduardo
 */

// função para validar as rotas
function ValidaRotas($param) {

    $requestURI = $_SERVER["REQUEST_URI"];
    if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $requestURI)) {
        $ext = substr($requestURI, -3, 3);
        switch ($ext)
        {
            case "css";
                $ctype = "text/css";
                break;
            case "js";
                $ctype = "application/javascript";
                break;
            case "gif":
                $ctype="image/gif";
                break;
            case "png":
                $ctype="image/png";
                break;
            case "jpeg":
            case "jpg":
                $ctype="image/jpg";
                break;
            default:
        }
        header("content-type: " . $ctype);
        include("/css" . $requestURI);
        die();
    } else {
        // criando a rota
        $rota = "/".$param[1]; //$requestURI;

        if($param[1]==""){
            $param[1]="index";
        }

        $rotasValidas = array("index", "contato", "empresa", "produtos", "servicos");

        if (!(is_file($param[1] . ".php")) OR $rota!=$requestURI OR !in_array($param[1], $rotasValidas)) {
            http_response_code(404);
            require_once("404.php");
            die();
        }

        if($param[1]=="index"){
            require_once("indexMontada.php");
        }else{
            require_once($param[1] . ".php");
        }

    }

}

$dados_url  = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$enderecoDigitado = explode('/',$dados_url['path'],2);
$enderecoDigitado[1] = str_replace('.php', '', $enderecoDigitado[1]);

ValidaRotas($enderecoDigitado);

?>