<?php
    $resultado = busca($_POST["busca"], $db);
?>
<div class="container">
    <div class="page-header">
        <h1>Pesquisa: <small><?php echo $_POST["busca"]; ?></small></h1>
    </div>
    <?php
        if (count($resultado) == 0) {
            echo "<p>O termo pesquisado não foi encontrado</p>";
        } else {
            echo "<p>O termo pesquisado foi encontrado nas seguintes páginas:</p>";
            foreach ($resultado as $pagina) {
                echo "<a href=\"/{$pagina->nome}\">{$pagina->titulo}</a><br />";
            }
        }
    ?>
</div>
