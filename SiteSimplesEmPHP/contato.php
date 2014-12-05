<!-- incluindo o cabecalho -->
<?php require_once("cabecalho.php"); ?>

<!-- incluindo o menu -->
<?php  require_once("menu.php");  ?>

<body>
    <div class="container">
        <div class="page-header">
            <h1>Informe os dados abaixo!</h1>
        </div>

        <form action="resultado.php"  method="POST">
            <p>
                <input type="text" name="nome" size="40" value="" placeholder="Nome" />
            </p>

            <p>
                <input type="email" name="email" size="40" value=""  placeholder="Email"/>
            </p>

            <p>

                <input type="text" name="assunto" size="40" value="" placeholder="Assunto"/>
            </p>

            <p>
                <textarea name="mensagem" value="" placeholder="Mensagem" style="margin: 0px; width: 321px; height: 197px;" ></textarea>
            </p>

            <p>
                <input name="enviar" type="submit" value="Enviar" />
            </p>

        </form>
    </div>
</body>

<!-- incluindo o rodape -->
<?php require_once("rodape.php"); ?>


