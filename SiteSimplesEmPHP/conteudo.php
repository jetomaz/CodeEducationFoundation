<?php    
    $pagina = mostraPagina($param[1], $db);
?>

<body>

<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1><?php echo $pagina[0]->titulo; ?></h1>
    </div>
    <?php
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