<?php
require_once "includes/conexaobd.inc.php";

$db = conecta();
// Apaga o Banco de Dados
$statement = "DROP DATABASE foundation";
$db->exec($statement);
// Cria o Banco de Dados
$statement = "CREATE DATABASE IF NOT EXISTS foundation";
$db->exec($statement);
// Seleciona o Banco de Dados
$statement = "USE foundation";
$db->exec($statement);


// Cria tabela Genérica Paginas - Vamos colocar todos os dados nela
$statement = "CREATE TABLE IF NOT EXISTS Paginas (
  id int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(50) NOT NULL,
  titulo varchar(50) NOT NULL,
  texto text NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1";
$db->exec($statement);
// Insere dados na tabela Genérica Paginas

// ###PRODUTOS###
$statement = "INSERT INTO Paginas(nome, titulo, texto) VALUES('produtos','Sistema de Relacionamento CRM - Cliente Facil', '
    O sistema de CRM - Controle Facil, nasceu da necesidade dos nossos clientes de terem respostas mais
    rapidas sobre seus produtos e serviços, desta forma podendo tomar decisões com mais agilidade de confiança,
    compreender a relação do cliente com a empresa e seus produtos é de vital importancia para o crescimento
    sustentavel de qualquer tido de negocio, o nosso software CRM oferece isso de forma clara e concisa, estamos sempre
    focados nos resultados que o cliente espera')";
$db->exec($statement);

$statement = "INSERT INTO Paginas(nome, titulo, texto) VALUES('produtos','Sites Institucionais e Administrativos', 'Desenvolvemos
    sites institucionais e administrativos para todos os seguimentos, respeitando a identidade e foco da empresa
    do cliente, estamos comprometidos com prazos e com o resultado que o cliente espera, temos um portfolio vasto com
    mais de 150 sites e lojas virtuais, contamos com uma equipe qualificadas de profissionais de design e programação,
    o nosso principal produto é o Portal Online, um site onde voce pode cadastrar produtos para vender e comprar, acesse www.portalonline.com.br.')";
$db->exec($statement);

$statement = "INSERT INTO Paginas(nome, titulo, texto) VALUES('produtos','Aplicativos Mobile', 'Desenvolvemos aplicativos para
tablet ou celular, com as mais recentes tecnologias do mercado, aplicativos para android, iOS, windows fone e tudo mais
o que sair no mercado, somos fantasticos com aplicativos mobile, não deixe de conhecer noso produtos vitoriosos no google
play e na app store')";
$db->exec($statement);

// ###SERVICOS###
$statement = "INSERT INTO Paginas(nome, titulo, texto) VALUES('servicos','Identidade Visual', 'Criamos a identidade visual
de empresa, desenvolvemos logotipos, logomarcas, conceituação da marca, textos decritivos de produtos
e serviços, toda a identidade visual que a empresa usara para divulgação, tambem criamos 
as campanhas publicitarias para colocar a empresa na Midia')";
$db->exec($statement);

$statement = "INSERT INTO Paginas(nome, titulo, texto) VALUES('servicos','Administração de Redes Sociais', 'Mantemos e 
Administramos todas as redes sociais dos clientes que contratarem estre serviço, respondemos perguntas dos
usuarios destas redes sociais, criamos paginas no facebook e tudo mais')";
$db->exec($statement);


// ###INDEX###
$statement = "INSERT INTO Paginas(nome, titulo, texto) VALUES('index', 'Site Simples em PHP','Site de Exemplo em PHP 
        usando BootStrap como ferramenta visual, espero que voce goste deste site! <br/>
        Aqui estamos treinando conceitos de php em nivel básico, mas logo estaremos trabalhando com php avançado!')";
$db->exec($statement);

// ###EMPRESA###
$statement = "INSERT INTO Paginas(nome, titulo, texto) VALUES('empresa', 'Empresa','<p>Lorem ipsum dolor sit amet,
 consectetur adipiscing elit. Vestibulum in nisl ut metus scelerisque elementum eu quis ligula. Integer quis elementum
  urna, at blandit nulla. Ut faucibus nulla eget lacus imperdiet, nec venenatis mi sodales. Mauris a felis a enim molestie accumsan. Aliquam sed            lacus in diam venenatis tincidunt a ac quam. Aenean bibendum sapien eu velit maximus cursus. Donec nibh ligula, euismod porttitor vulputate eu, fringilla eu nisi. Praesent vel tincidunt ligula, eget rhoncus mi. Ut gravida ligula a ligula tristique, in semper lectus vehicula. Aliquam eu              scelerisque nibh, bibendum tempor justo. Nam ornare posuere ex. Praesent dignissim dignissim porta.
    </p>
    <br/>
    <p>
    Donec congue sapien id ornare laoreet. Praesent viverra ante non fringilla rhoncus. Suspendisse at lacus quam. Vestibulum iaculis dui a lacus iaculis imperdiet. Integer varius euismod dictum. Curabitur pellentesque purus bibendum nibh ultricies, vitae consequat felis posuere. Donec gravida          massa felis, eget iaculis nunc tincidunt et. Donec sed elit nec velit condimentum facilisis vitae quis nisi. Donec in diam egestas, rutrum urna id, euismod purus. Suspendisse potenti. Sed iaculis ut purus sed sagittis. Etiam molestie ornare turpis, quis dignissim mi ullamcorper vel. Mauris          feugiat congue nibh at gravida. Pellentesque gravida tincidunt maximus.
    </p>')";
$db->exec($statement);