<?php

require_once "global.php";

if (isset($_GET['user'])) {
    $vendedora = new Vendedora();
    $vendedora->setNomeUsuarioNegocioVendedora($_GET['user']);
    $dados = daoVendedora::consultarIdPorNomeUsuario($vendedora);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Açúcar e Canela</title>
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons-1.10.5/font/bootstrap-icons.css" />
</head>

<body>
    <div class="modal pop" id="modal-login" tabindex="-1" aria-labelledby="modal-login" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Puxa...</h1>
                </div>
                <div class="modal-body d-flex flex-column text-center">
                    <i class="bi bi-emoji-frown"></i>
                    Você precisa estar logado para acessar essa área...
                </div>
                <div class="modal-footer d-flex justify-content-around">
                    <button type="button" class="button button-secondary" data-bs-dismiss="modal">OK</button>
                    <a class="button" href="../login.php">FAZER LOGIN</a>
                </div>
            </div>
        </div>
    </div>

    <div id="user-profile">
        <nav id="nav">
            <div id="nav-list">
                <a href="index.php" class="nav-link">
                    <i class="bi bi-house-door"></i>
                    <span>
                        Home
                    </span>
                </a>
                <a href="pesquisa.php" class="nav-link">
                    <i class="bi bi-search"></i>
                    <span>
                        Pesquisa
                    </span>
                </a>
				<a href="#" class="nav-link" data-bs-target="#modal-login" data-bs-toggle="modal">
                    <i class="bi bi-chat"></i>
                    <span>
                        Conversas
                    </span>
                </a>
                <a href="configuracoes.php" class="nav-link">
                    <i class="bi bi-person"></i>
                    <span>
                        Configurações
                    </span>
                </a>
            </div>
        </nav>
        <main id="main">
            <div id="main-title">
                <button class="voltar" onclick="history.back()">
                    <i class="bi bi-arrow-left"></i>
                </button>
                <?php echo $dados['nomeNegocioVendedora']?>
            </div>
            <div id="content">
                <div id="negocio-bio">
                    <div id="bio-photo">
                        <img src="../assets/img/users/negocios/1.png" alt="">
                    </div>
                    <div id="bio-info">
                        <div id="bio-name">
                            Açúcar e Canela
                            <div class="dropdown-start dropdown">
                                <button id="options-profile" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-start dropdown-sobe">
                                    <li>
                                        <a class="dropdown-item" href="#" data-bs-target="#modal-login" data-bs-toggle="modal">
                                            <i class="bi bi-exclamation-triangle"></i>
                                            Denunciar
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#" data-bs-target="#modal-login" data-bs-toggle="modal">
                                            <i class="bi bi-chat"></i>
                                            Iniciar conversa
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="bio-username">@acucarcanela</div>
                        <div id="bio-desc">Tornando o seu mundo um pouco mais doce.
                            - Sediada em SP
                        </div>
                        <div id="bio-options">
                            <button type="button" class="button bio-option" data-bs-target="#modal-login" data-bs-toggle="modal">
                                Seguir
                            </button>
                            <button type="button" class="button bio-option">
                                Compartilhar
                                <i class="bi bi-share-fill"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div id="negocio-info">
                    <div class="negocio-information">
                        <i class="bi bi-bag"></i>
                        <span>5</span> Produtos
                    </div>
                    <div class="negocio-information">
                        <i class="bi bi-grid"></i>
                        <span>0</span> Serviços
                    </div>
                    <div class="negocio-information">
                        <i class="bi bi-people"></i>
                        <span>35</span> Seguidores
                    </div>
                </div>
                <div id="bio-products">
                    <a class="bio-product" href="produto.php">
                        <img src="../assets/img/products-services/1.png" alt="">
                    </a>
                    <a class="bio-product" href="produto.php">
                        <img src="../assets/img/products-services/2.png" alt="">
                    </a>
                    <a class="bio-product" href="produto.php">
                        <img src="../assets/img/products-services/3.png" alt="">
                    </a>
                    <a class="bio-product" href="produto.php">
                        <img src="../assets/img/products-services/4.png" alt="">
                    </a>
                    <a class="bio-product" href="produto.php">
                        <img src="../assets/img/products-services/5.png" alt="">
                    </a>
                    <!-- <a class="bio-product" href="produto.php">
                        <img src="../assets/img/products-services/1.png" alt="">
                    </a>
                    <a class="bio-product" href="produto.php">
                        <img src="../assets/img/products-services/pano-de-prato.jpg" alt="">
                    </a>
                    <a class="bio-product" href="produto.php">
                        <img src="../assets/img/products-services/sabonetes.jpg" alt="">
                    </a> -->

                    <!-- <div class="card-produto" href="produto.php" aria-hidden="true">
                        <div class="img-card placeholder-glow">
                            <span class="placeholder"></span>
                        </div>
                        <div class="info-card">
                            <div class="nome-card placeholder-glow">
                                <span class="placeholder col-5"></span>
                                <span class="placeholder col-6"></span>
                            </div>
                            <div class="preco-card placeholder-glow">
                                <div class="placeholder"></div>
                            </div>
                            <div class="avaliacao-card placeholder-glow">
                                <span class="placeholder col-12"></span>
                            </div>
                            <div class="categoria-card placeholder-glow">
                                <span class="placeholder col-4"></span>
                            </div>
                            <div class="negocio-card placeholder-glow">
                                <span class="placeholder col-4 placeholder-sm"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-produto" href="produto.php" aria-hidden="true">
                        <div class="img-card placeholder-glow">
                            <span class="placeholder"></span>
                        </div>
                        <div class="info-card">
                            <div class="nome-card placeholder-glow">
                                <span class="placeholder col-5"></span>
                                <span class="placeholder col-6"></span>
                            </div>
                            <div class="preco-card placeholder-glow">
                                <div class="placeholder"></div>
                            </div>
                            <div class="avaliacao-card placeholder-glow">
                                <span class="placeholder col-12"></span>
                            </div>
                            <div class="categoria-card placeholder-glow">
                                <span class="placeholder col-4"></span>
                            </div>
                            <div class="negocio-card placeholder-glow">
                                <span class="placeholder col-4 placeholder-sm"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-produto" href="produto.php" aria-hidden="true">
                        <div class="img-card placeholder-glow">
                            <span class="placeholder"></span>
                        </div>
                        <div class="info-card">
                            <div class="nome-card placeholder-glow">
                                <span class="placeholder col-5"></span>
                                <span class="placeholder col-6"></span>
                            </div>
                            <div class="preco-card placeholder-glow">
                                <div class="placeholder"></div>
                            </div>
                            <div class="avaliacao-card placeholder-glow">
                                <span class="placeholder col-12"></span>
                            </div>
                            <div class="categoria-card placeholder-glow">
                                <span class="placeholder col-4"></span>
                            </div>
                            <div class="negocio-card placeholder-glow">
                                <span class="placeholder col-4 placeholder-sm"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-produto" href="produto.php" aria-hidden="true">
                        <div class="img-card placeholder-glow">
                            <span class="placeholder"></span>
                        </div>
                        <div class="info-card">
                            <div class="nome-card placeholder-glow">
                                <span class="placeholder col-5"></span>
                                <span class="placeholder col-6"></span>
                            </div>
                            <div class="preco-card placeholder-glow">
                                <div class="placeholder"></div>
                            </div>
                            <div class="avaliacao-card placeholder-glow">
                                <span class="placeholder col-12"></span>
                            </div>
                            <div class="categoria-card placeholder-glow">
                                <span class="placeholder col-4"></span>
                            </div>
                            <div class="negocio-card placeholder-glow">
                                <span class="placeholder col-4 placeholder-sm"></span>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </main>
    </div>

    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>