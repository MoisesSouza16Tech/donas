<?php

require_once "global.php";

if (isset($_GET['user'])) {
    $vendedora = new Vendedora();
    $vendedora->setNomeUsuarioNegocioVendedora($_GET['user']);
    $dados = daoVendedora::consultarPorNomeUsuario($vendedora);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo isset($dados['nomeNegocioVendedora']) ? $dados['nomeNegocioVendedora'] :  'Nada foi encontrado.' ?></title>
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="../assets/media/favicon.ico" type="image/x-icon" />
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
            <picture id="nav-logo">
                <source srcset="../assets/media/logo-letra.svg" media="(max-width:1200px)" />
                <img src="../assets/media/logo-h.svg" alt="Logo do DONAS" class="mobile-hide">
            </picture>
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
            <a id="new-product" href="login.php" class="button">
				<i class="bi bi-box-arrow-in-right"></i>
				<span>Fazer log-in</span>
			</a>
        </nav>
        <main id="main">
            <div id="main-title">
                <button class="voltar" onclick="history.back()">
                    <i class="bi bi-arrow-left"></i>
                </button>
                <?php echo isset($dados['nomeNegocioVendedora']) ? $dados['nomeNegocioVendedora'] :  'Nada foi encontrado.' ?>
            </div>
            <div id="content">
                <?php if (isset($dados['nomeNegocioVendedora'])) { ?>
                    <div id="negocio-bio">
                        <div id="bio-photo">
                            <img src="../<?php echo $dados['fotoNegocioVendedora'] ?>" alt="">
                        </div>
                        <div id="bio-info">
                            <div id="bio-name">
                                <?php echo $dados['nomeNegocioVendedora'];
                                if ($dados['nivelNegocioVendedora'] == 1) {
                                ?>
                                    <i class="bi bi-gem highlight" id="bio-star"></i>
                                <?php
                                }
                                ?>
                            </div>
                            <div id="bio-rating">
                                <?php
                                $qtdestrelas = ceil(daoAnuncio::consultarMediaVendedora($dados['idVendedora']));

                                for ($i = 0; $i < $qtdestrelas; $i++) {
                                ?>
                                    <i class="bi bi-star-fill"></i>
                                <?php
                                }

                                for ($i = 0; $i < 5 - $qtdestrelas; $i++) {
                                ?>
                                    <i class="bi bi-star"></i>
                                <?php
                                }
                                ?>
                            </div>
                            <div id="bio-dropdown">
                                <div class="dropdown-start dropdown">
                                    <button class="options-button" id="options-bio"  type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                            <div id="bio-username">@<?php echo $dados['nomeUsuarioNegocioVendedora'] ?></div>
                            <div id="bio-followers">
                                <?php
                                $qtdseguidores = daoSeguidor::contarSeguidor($dados['idVendedora']);

                                echo $qtdseguidores != 1 ? $qtdseguidores . " seguidores" : $qtdseguidores . " seguidor";
                                ?>
                            </div>
                            <div id="bio-desc"><?php echo $dados['bioNegocioVendedora'] ?></div>
                            <div id="bio-follow-share">
                               
                            </div>
                        </div>
                    </div>
                    <div id="negocio-info">
                        <div class="negocio-information">
                            <i class="bi bi-bag"></i>
                            <?php
                            $qtdprodutos = daoAnuncio::contarAnuncioProduto($dados['idVendedora']);

                            ?>
                            <span><?php echo $qtdprodutos ?></span> Produtos
                        </div>
                        <div class="negocio-information">
                            <i class="bi bi-grid"></i>
                            <?php
                            $qtdservicos = daoAnuncio::contarAnuncioServico($dados['idVendedora']);

                            ?>
                            <span><?php echo $qtdservicos ?></span> Serviços
                        </div>
                    </div>
                    <div id="bio-products">
                        <?php

                        $anuncios = daoAnuncio::listarAnunciosVendedora($dados['idVendedora']);

                        foreach ($anuncios as $a) {

                            $qtdestrelas = $a['estrelasAnuncio'];

                        ?>
                            <a class="bio-product" href="anuncio.php?a=<?php echo $a['idAnuncio'] ?>">
                                <img src="../<?php echo $a['imagemPrincipalAnuncio'] ?>" />
                            </a>

                        <?php
                        }

                        ?>

                    </div>
                <?php
                } else {
                ?>
                    <h2 class="mx-auto my-auto">Nenhum negócio com esse nome foi encontrado.</h2>
                <?php
                } ?>
            </div>
        </main>
    </div>

    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>