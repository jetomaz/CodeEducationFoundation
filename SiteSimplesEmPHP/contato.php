<!-- incluindo o cabecalho -->
<?php require_once("cabecalho.php"); ?>

<!-- incluindo o menu -->
<?php  require_once("menu.php");  ?>

<body>
    <div class="container">
        <div class="page-header">
            <h1>Informe os dados abaixo!</h1>
        </div>

        <div class="col-sm-6">
        <form action="/contato"  method="POST" class="form-horizontal">

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
    <div class="col-sm-6">

        <?php
        if (isset($_POST["nome"])) {
            $error = false;
            $errorMessage = "";
            /*if (strlen(trim($_POST["nome"])) < 3 || strlen(trim($_POST["nome"]) > 50)) {
                $errorMessage .= "Nome deve ter entre 3 e 50 caracteres.<br />";
                $error = true;
            }*/
            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $errorMessage .= "Email inválido.<br />";
                $error = true;
            }
            /*if (strlen(trim($_POST["assunto"])) < 3 || strlen(trim($_POST["assunto"]) > 30)) {
                $errorMessage .= "Assunto deve ter entre 3 e 30 caracteres.<br />";
                $error = true;
            }*/
            /*if (strlen(trim($_POST["mensagem"])) < 5) {
                $errorMessage .= "Mensagem muito curta. Mínimo de 5 caracteres";
                $error = true;
            }*/
            if (!$error) {
                echo '<div class="alert alert-success">';
                echo '<h2>Dados enviados com sucesso!</h2>';
                echo "<p>Nome: {$_POST['nome']}<br />";
                echo "Email: {$_POST['email']}<br />";
                echo "Assunto: {$_POST['assunto']}<br />";
                echo "Mensagem: {$_POST['mensagem']}</p>";
                echo "</div>";
            } else {
                echo '<div class="alert alert-danger">';
                echo '<h2>Erro(s) Encontrado(s)!</h2>';
                echo $errorMessage;
                echo "</div>";
            }
        }
        ?>
    </div>
</div>
</body>

<!-- incluindo o rodape -->
<?php require_once("rodape.php"); ?>


