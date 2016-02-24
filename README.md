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


###Os comentarios abaixo são da fase 1 e Fase 2 do projeto ###

Executar o servidor interno do PHP apontando o arquivo index.php que esta na rapiz do projeto
php -S localhost:8001