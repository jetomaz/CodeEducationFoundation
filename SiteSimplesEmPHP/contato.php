<!-- incluindo o cabecalho -->
<?php require_once("cabecalho.php"); ?>

<!-- incluindo o menu -->
<?php  require_once("menu.php");  ?>

<body>
    <div class="container">
        <div class="page-header">
            <h1>Informe os dados abaixo!</h1>
        </div>

        <form action="resultado.php"  method="POST" class="form-horizontal">

            <div class="form-group">
                <label for="inputNome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome" id="inputNome" placeholder="Nome" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputAssunto" class="col-sm-2 control-label">Assunto</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="assunto" id="inputAssunto" placeholder="Assunto" required>
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Mensagem</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="mensagem" rows="3" required></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="enviar" class="btn btn-default">Enviar</button>
                </div>
            </div>

        </form>
    </div>
</body>

<!-- incluindo o rodape -->
<?php require_once("rodape.php"); ?>


