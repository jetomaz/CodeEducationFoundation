CodeEducationFoundation
=======================

18/08/2015

###Projeto fase 3: Conteúdo em Banco de Dados###

Devemos rodar o arquivo "fixtures.php" alimentar o banco de dados.
php fixtures.php

Executar o servidor interno do PHP apontando o arquivo index.php que esta na rapiz do projeto
php -S localhost:8001

-- Detalhes do que foi feito

Não daremos "include ou require" nas paginas, vamos buscar os dados de um banco de dados que sera criado
e alimentado pela fixture.php no banco de dados Mysql

A conexão sera feita atrvez de PDO, com variaveis e configuração para conexão, e faremos uma busca por palavras
chave, assim quando o usuario digitar uma palavra e clicar em buscar, nos buscaremos no banco de dados
a a montaremos a pagina com a informação necessária

utilizei somente uma tabela com as palavras chaves incluidas nela, assim podesso buscar tudo em uma unica tabela, 
mas nada impede de se criar varias tabelas para guardar as informações.

PS : Eu fiquei varios meses sem mexer no sistema do curso porque fiquei,
doente, estou retornando ao curso agora e vou emprenhar pelo menos 4 horas por dia 
para colocar o conteudo em dia.

###Os comentarios abaixo são da fase 1 e Fase 2 do projeto ###

12-01-2014
Ola Wesley, eu nunca trabalhei com rotas assim na mão,
sempre trabalhei com menu simples chamando arquivos .php
fiz da forma que entendi, espero que de certo. att.  Eduardo


13/01/2014
Boa nooite, wesley me desculpe mas eu nao entendi, nao entendo o que o
header("HTTP/1.0 404 Not Found"); ou o http_response_code(404); fazem no servidor interno
do php, ao meu ver se o arquivo nao existe eu devo redirecionar para uma pagina 404
com o header(location) porem voce me disse que nao sair da pagina index, portando usando
essas funções que voce me passou nao funcionou da forma que eu esperava e eu nao entendi,
me desculpe mais nunca usei redirecionamento de rotas desta forma e os videos tambem nunca
mencionaram essas funções, estou um pouco preocupado com o que esta acontecendo porque tem
coisas que estão sendo cobradas nos projetos que nao estão sendo ensinadas nos videos, estou
me sentindo um pouco desconfortavel com isso, caso voce queira conversar diretamente meu email
é jetomaz@gmail.com, estou preocupado pois estou atrazado 2 modulos e não estou conseguindo entender
o que esta sendo pedido nos projetos.
Att.

Eduardo


14/01/2014

Boa tarde!

Pessoal muito obrigado pela ajuda, agora sim entendi o que precisava ser feito, e entendi
tambem que esse procedimento vai ser fundamental na hora de montar url amigaveis, peço desculpas
por ter fica aflito mas assim são as pessoal, tenho que melhorar nisso tambem :)
Acabei usando a minha logica mesmo com a ajuda de voces e fiz algumas adequações,
espero que tenha ficado satisfatorio, Muito Obrigado!
ps: Eu testei forçando a rota pelo index.php com -- php -S localhost:8001 index.php

Att.

Eduardo
