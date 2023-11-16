<?php

require_once "validador.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encomendas</title>
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon" />
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons-1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <div id="user-encomenda">
        <div class="modal pop" id="modal-cancelar" tabindex="-1" aria-labelledby="modal-cancelar" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Cancelar encomenda</h1>
                    </div>
                    <div class="modal-body d-flex flex-column text-center">
                        Você está prestes a cancelar a encomenda <h5 class="highlight"></h5>. Tem certeza? Ao cancelar, não será mais possível ter acesso a ele novamente.
                    </div>
                    <div class="modal-footer d-flex justify-content-around">
                        <button type="button" class="button button-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <a href="cancelar-pedido.php" class="button button-red" id="cancelar-pedido">OK</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal pop" id="modal-concluir" tabindex="-1" aria-labelledby="modal-concluir" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Concluir encomenda</h1>
                    </div>
                    <div class="modal-body d-flex flex-column text-center">
                        Você está prestes a concluir a encomenda <h5 class="highlight"></h5> Tem certeza? Ao finalizar, não será mais possível ter acesso a ele novamente.
                    </div>
                    <div class="modal-footer d-flex justify-content-around">
                        <button type="button" class="button button-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <a href="concluir-pedido.php" class="button" id="concluir-pedido">OK</a>
                    </div>
                </div>
            </div>
        </div>
        <nav id="nav" class="nav-dona">
            <picture id="nav-logo">
                <source srcset="../assets/img/logo-letra.svg" media="(max-width:1200px)" />
                <img src="../assets/img/logo-h.svg" alt="Logo do DONAS" class="mobile-hide">
            </picture>
            <div id="nav-list">
                <a href="index.php" class="nav-link">
                    <i class="bi bi-house-door"></i>
                    <span>
                        Home
                    </span>
                </a>
                <a href="encomendas.php" class="nav-link active">
                    <i class="bi bi-grid-fill"></i>
                    <span>
                        Encomendas
                    </span>
                </a>
                <a href="meus-anuncios.php" class="nav-link">
                    <i class="bi bi-box-seam"></i>
                    <span>
                        Meus anúncios
                    </span>
                </a>
                <a href="notificacoes.php" class="nav-link">
                    <i class="bi bi-bell"></i> <span>
                        Notificações
                    </span>
                </a>
                <a href="conversas.php" class="nav-link">
                    <i class="bi bi-chat"></i>
                    <span>
                        Conversas
                    </span>
                </a>
                <a href="configuracoes.php" class="nav-link">
                    <img src="../<?php echo $_SESSION['foto-empresa'] ?>" id="foto-usuario">
                    <i class="bi bi-person"></i>
                    <span>
                        Configurações
                    </span>
                </a>
            </div>
            <a id="new-product" href="novo.php" class="button">
                <i class="bi bi-plus-lg"></i>
                <span>Criar novo anúncio</span>
            </a>

            <div id="user-info">
                <a href="../">
                    <img src="../<?php echo $_SESSION['foto-empresa'] ?>" id="foto-info">
                </a>
                <div id="info-user">
                    <div id="nome-user">
                        <?php echo $_SESSION['nome-empresa'] ?>
                    </div>
                    <div id="nick-user">
                        @<?php echo $_SESSION['username'] ?>
                    </div>
                </div>
                <div class="dropup-center dropup">
                    <button id="options-user" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-sobe">
                        <li>
                            <a class="dropdown-item" href="../logout.php">
                                <i class="bi bi-box-arrow-right"></i>
                                Sair
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#" data-theme-toggle="dark">
                                <i class="bi bi-moon"></i>
                                Modo noturno
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main id="main">
            <!-- <img src="../assets/img/rosas.svg" class="rosa-fundo"> -->
            <div id="main-title">
                Painel de encomendas
            </div>
            <div id="content">
                <div id="encomendas">
                    <?php
                    $pedidos = daoPedidoProduto::listarPedidosAtivosVendedora($_SESSION['id']);

                    foreach ($pedidos as $p) {
                    ?>
                        <div class="encomenda">
                            <div class="info-encomenda">
                                <img src="../<?php echo $p['fotoCliente'] ?>" alt="" class="foto-encomenda">
                                <div class="nome-username">
                                    <div class="nome-encomenda"><?php echo $p['nomeCliente'] ?></div>
                                    <div class="username-encomenda">@<?php echo $p['nomeUsuarioCliente'] ?></div>
                                </div>
                            </div>
                            <div class="dados-encomenda">
                                <div class="nome-encomenda-anuncio">
                                    <label for="" class="form-label">Pedido</label>
                                    <div class="input-wrapper">
                                        <?php echo $p['nomeAnuncio'] ?>
                                    </div>
                                </div>
                                <div class="data-encomenda-anuncio">
                                    <label for="" class="form-label">Data do pedido</label>
                                    <div class="input-wrapper">
                                        <?php echo $p['dataPedidoFeito'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="opcoes-encomenda">
                                <button class="button concluir-pedido" data-bs-toggle="modal" data-bs-target="#modal-concluir" data-id="<?php echo $p['idPedidoProduto'] ?>" data-nome="<?php echo $p['nomeCliente'] ?>" data-anuncio="<?php echo $p['nomeAnuncio'] ?>">Concluir</button>
                                <button class="button button-red cancelar-pedido" data-bs-toggle="modal" data-bs-target="#modal-cancelar" data-id="<?php echo $p['idPedidoProduto'] ?>" data-nome="<?php echo $p['nomeCliente'] ?>" data-anuncio="<?php echo $p['nomeAnuncio'] ?>">Cancelar</button>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <!-- <img src="../assets/img/rosas.svg" class="rosa-fundo"> -->
        </main>
    </div>

    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script>
        let cancelarPedido = document.querySelectorAll('.cancelar-pedido')
        let concluirPedido = document.querySelectorAll('.concluir-pedido')

        cancelarPedido.forEach(item => {
            let id = item.getAttribute('data-id')
            let cliente = item.getAttribute('data-nome')
            let anuncio = item.getAttribute('data-anuncio')

            item.addEventListener('click', () => {
                document.querySelector('#cancelar-pedido').href=`cancelar-encomenda.php?e=${id}`

                document.querySelector('#modal-cancelar h5.highlight').innerText = `${cliente} - ${anuncio}`
            })
        })
        
        concluirPedido.forEach(item => {
            let id = item.getAttribute('data-id')
            let cliente = item.getAttribute('data-nome')
            let anuncio = item.getAttribute('data-anuncio')

            item.addEventListener('click', () => {
                document.querySelector('#concluir-pedido').href=`concluir-encomenda.php?e=${id}`

                document.querySelector('#modal-concluir h5.highlight').innerText = `${cliente} - ${anuncio}`
            })
        })
    </script>
</body>

</html>
