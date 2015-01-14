<?php
if(isset($_GET['menu'])){
    $menu = $_GET['menu'];
}else{
    $menu=1;
}
?>

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
                <li <?php if($menu==1 || $menu==0){ echo "class='active'";} ?>><a href="index.php<?php echo "?menu=1"; ?>">Home</a></li>
                <li <?php if($menu==2){ echo "class='active'";} ?>><a href="empresa.php<?php echo "?menu=2"; ?>">Empresa</a></li>
                <li <?php if($menu==3){ echo "class='active'";} ?>><a href="produtos.php<?php echo "?menu=3"; ?>">Produtos</a></li>
                <li <?php if($menu==4){ echo "class='active'";} ?>><a href="servicos.php<?php echo "?menu=4"; ?>">Serviços</a></li>
                <li <?php if($menu==5){ echo "class='active'";} ?>><a href="contato.php<?php echo "?menu=5"; ?>">Contato</a></li>

               <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li> -->

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>