<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Site Simples em PHP</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php if($rota == "/" || $rota == "/index"){ echo "class='active'";} ?>><a href="/">Home</a></li>
                <li <?php if($rota == "/empresa"){ echo "class='active'";} ?>><a href="/empresa">Empresa</a></li>
                <li <?php if($rota == "/produtos"){ echo "class='active'";} ?>><a href="/produtos">Produtos</a></li>
                <li <?php if($rota == "/servicos"){ echo "class='active'";} ?>><a href="/servicos">Serviços</a></li>
                <li <?php if($rota == "/contato"){ echo "class='active'";} ?>><a href="/contato">Contato</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>