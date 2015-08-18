<?php
require_once("cabecalho.php");
require_once "includes/conexaobd.inc.php";
require_once "includes/funcoes.inc.php";

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

        $rotasValidas = array("index", "contato", "empresa", "produtos", "servicos", "busca");

        // sempre injeta cabeçalho e menu
        require_once("cabecalho.php");
        require_once("menu.php");
        
        if (!(is_file($param[1] . ".php")) OR $rota!=$requestURI OR !in_array($param[1], $rotasValidas)) {
            http_response_code(404);
            require_once("404.php");
            die();
        }else{
        	//selecionando o banco de dados
        	$db = conecta();
        	$statement = "USE foundation";
        	$db->exec($statement);
        }

        if($param[1]=="index"){
            require_once("indexMontada.php");            
        }else{
            require_once($param[1] . ".php");
        }
        
        // sempre injeta o rodape
        require_once("rodape.php");
    }

}

$dados_url  = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$enderecoDigitado = explode('/',$dados_url['path'],2);
$enderecoDigitado[1] = str_replace('.php', '', $enderecoDigitado[1]);

ValidaRotas($enderecoDigitado);

?>