<?php    
    $pagina = mostraPagina($param[1], $db);
?>
<body>

<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1>Produtos</h1>
    </div>
	<?php
	foreach ($pagina as $produto) {
	?>
        
                
    <div class="col-sm-3">
    <h2><?php echo $produto->titulo; ?></h2>
    <p><?php echo $produto->texto; ?></p>
	</div>
	
	<?php
	}
	?>
    	
    	
</div>
</body>