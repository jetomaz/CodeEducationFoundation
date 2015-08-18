<!-- incluindo o cabecalho -->
<?php require_once("cabecalho.php"); ?>

<!-- incluindo o menu -->
<?php  require_once("menu.php");  ?>

<!-- incluindo o conteudo -->
<body>

<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1>Serviços</h1>
    </div>
    
    <?php    
    	$pagina = mostraPagina($param[1], $db);
		foreach ($pagina as $key => $servicos) {
	?>
    <p class="lead">
    	<h2><?php echo $servicos->titulo; ?></h2>
        <?php echo $servicos->texto; ?>
    </p>
    
    <?php
    }
    ?>



</div>


</body>

<!-- incluindo o rodape -->
<?php require_once("rodape.php"); ?>



