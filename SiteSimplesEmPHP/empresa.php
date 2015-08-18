<!-- incluindo o cabecalho -->
<?php require_once("cabecalho.php"); ?>

<!-- incluindo o menu -->
<?php  require_once("menu.php");  ?>

<!-- incluindo o conteudo -->
<body>

<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1>Empresa</h1>
    </div>
    
    <?php
    $pagina = mostraPagina($param[1], $db);

    foreach ($pagina as $c) {
    ?>
    <p class="lead">
        <?php echo $c->texto; ?> 
    </p>
    
    <?php
	}
    ?>



</div>


</body>

<!-- incluindo o rodape -->
<?php require_once("rodape.php"); ?>



