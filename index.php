<html lang="pt-br">
    <?php
        include_once "include/head.php";
    ?>
    <body>
        <header class="container header">
            <div class="row">
                <div class="col-md-3">
                    <div class="col-md-10">
                        <img src="img/logo.png" alt="Logo">
                    </div>
                </div>
                <div class="col-md-4 offset-md-5">
                    <form action="">
                        <input type="text" class="form-control barraPesquisa" placeholder="Pesquisar no Site...">
                    </form>
                </div>
            </div>
        </header>
        <div id="navegacao">
            <div class="container">
                <div class="col">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#" role="tab" aria-controls="home" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#lancamentos" role="tab" aria-controls="profile" aria-selected="false">Lançamentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#" role="tab" aria-controls="contact" aria-selected="false">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#" role="tab" aria-controls="contact" aria-selected="false">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/banner1.jpg" alt="DC Oficial">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/banner2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/banner3.jpg" alt="Camisa Flash">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Proximo</span>
            </a>
        </div>
        <div class="container" id="lancamentos">
            <div class="content">
                <h2 class="heading font-weight-bold block">
                    <span class="box"></span>
                    Últimos lançamentos
                </h2>
            </div>
        </div>
        <div class="container" id="produtos_itens">
            <div class="row">

                <div class="produtos_item col-md-3">
                    <img src="img/ironman.png" class="img-fluid col-md-3" alt="lançamentos" title="Ultimos lançamentos">
                    <div class="barraproduto col-md-12">
                        <h2 class="col-md-12">Camisa - Mascara Homem de Ferro</h2>
                        <a href="" class="detalhe offset-1 col-md-2">Detalhes</a></div>
                </div>

                <div class="produtos_item col-md-3">
                    <img src="img/armadura.png" class="img-fluid col-md-3" alt="lançamentos" title="Ultimos lançamentos">
                    <div class="barraproduto col-md-12">
                        <h2 class="col-md-12">Camisa - Armadura do Homem de Ferro</h2>
                        <a href="" class="detalhe offset-1 col-md-2">Detalhes</a></div>
                </div>

                <div class="produtos_item col-md-3">
                    <img src="img/spiderman.png" class="img-fluid col-md-3" alt="lançamentos" title="Ultimos lançamentos">
                    <div class="barraproduto col-md-12">
                        <h2 class="col-md-12">Moletom - Uniforme Homem Aranha</h2>
                        <a href="" class="detalhe offset-1 col-md-2">Detalhes</a></div>
                </div>
                <div class="produtos_item col-md-3">
                     <img src="img/cap.png" class="img-fluid col-md-3" alt="lançamentos" title="Ultimos lançamentos">
                    <div class="barraproduto col-md-12">
                        <h2 class="col-md-12">Camisa - Escudo Capitão America</h2>
                        <a href="" class="detalhe offset-1 col-md-2">Detalhes</a></div>
                </div>
            </div>
        </div>
        <div class="container" id="Produtos">
            <div class="content">
                <h2 class="heading font-weight-bold block">
                    <span class="box"></span>
                    Produtos
                </h2>
            </div>
        </div>
        <div class="container" id="produtos_itens">
            <div class="row">

                <div class="produtos_item col-md-3">
                    <img src="img/flash.png" class="img-fluid col-md-3" alt="Produtos" title=Produto>
                    <div class="barraproduto col-md-12">
                        <h2 class="col-md-12">Camisa - Raio flash </h2>
                        <a href="" class="detalhe offset-1 col-md-2">Comprar</a></div>
                </div>

                <div class="produtos_item col-md-3">
                    <img src="img/sonic.png" class="img-fluid col-md-3" alt="Produtos" title=Produto>
                    <div class="barraproduto col-md-12">
                        <h2 class="col-md-12">Camisa - Armadura do Homem de Ferro</h2>
                        <a href="" class="detalhe offset-1 col-md-2">Comprar</a></div>
                </div>

                <div class="produtos_item col-md-3">
                    <img src="img/mario.png" class="img-fluid col-md-3" alt="Produtos" title=Produto>
                    <div class="barraproduto col-md-12">
                        <h2 class="col-md-12">Moletom - Uniforme Homem Aranha</h2>
                        <a href="" class="detalhe offset-1 col-md-2">Comprar</a></div>
                </div>
                <div class="produtos_item col-md-3">
                    <img src="img/himym.png" class="img-fluid col-md-3" alt="Produtos" title=Produto>
                    <div class="barraproduto col-md-12">
                        <h2 class="col-md-12">Camisa - Escudo Capitão America</h2>
                        <a href="" class="detalhe offset-1 col-md-2">Comprar</a></div>
                </div>
            </div>
        </div>
        <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>