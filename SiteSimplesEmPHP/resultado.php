<!-- incluindo o cabecalho -->
<?php require_once("cabecalho.php"); ?>

<!-- incluindo o menu -->
<?php  require_once("menu.php");  ?>

<?php
if(isset($_POST['enviar'])){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
}
?>


<!-- incluindo o conteudo -->
<body>

<!-- Begin page content -->
<div class="container">
    <div class="page-header">
        <h1>Dados enviados com sucesso, abaixo seguem os dados que você enviou</h1>
    </div>
    <p class="lead">
        Nome : <?php echo " ".$nome; ?>   <br/>
        Email : <?php echo " ".$email; ?>   <br/>
        Assunto : <?php echo " ".$assunto; ?>   <br/>
        Mensagem : <?php echo " ".$mensagem; ?>   <br/>

    </p>




</div>


</body>

<!-- incluindo o rodape -->
<?php require_once("rodape.php"); ?>



