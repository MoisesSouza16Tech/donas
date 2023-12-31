<?php

require_once "validador.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversas</title>
    <link rel='stylesheet' href='../assets/vendor/cropperjs/css/cropper.css'>
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/media/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons-1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <div class="modal pop" id="modal-pesquisa" tabindex="-1" aria-labelledby="modal-pesquisa" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Pesquisar vendedora</h1>
                </div>
                <div class="modal-body">
                    <div class="search-container">
                        <input type="text" name="pesquisar-vendedora" id="pesquisar-vendedora" class="search-field" placeholder="Digite o nome de uma vendedora">
                        <button class="search-button"><i class="bi bi-search"></i></button>
                    </div>
                    <div id="search-results">

                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-around">
                    <button type="button" class="button" data-bs-dismiss="modal">Sair</button>
                </div>
            </div>
        </div>
    </div>

    <div id="user-chats">
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
                <a href="seus-pedidos.php" class="nav-link mobile-hide">
                    <i class="bi bi-box-seam"></i>
                    <span>
                        Seus pedidos
                    </span>
                </a>
                <a href="notificacoes.php" class="nav-link">
                    <i class="bi bi-bell">
                        <?php
                        if (daoNotifcCliente::contarNotificacoes($_SESSION['id'])) {
                        ?>
                            <span class="counter">
                                <?php
                                echo daoNotifcCliente::contarNotificacoes($_SESSION['id']);
                                ?>
                            </span>
                        <?php
                        }
                        ?>
                    </i> <span>
                        Notificações
                    </span>
                </a>
                <a href="conversas.php" class="nav-link active">
                    <i class="bi bi-chat-fill"></i>
                    <span>
                        Conversas
                    </span>
                </a>
                <a href="configuracoes.php" class="nav-link">
                    <img src="../<?php echo $_SESSION['foto'] ?>" id="foto-usuario" />
                    <i class="bi bi-person"></i>
                    <span>
                        Configurações
                    </span>
                </a>
            </div>
            <div id="user-info">
                <a >
                    <img src="../<?php echo $_SESSION['foto'] ?>" id="foto-info">
                </a>
                <div id="info-user">
                    <div id="nome-user">
                        <?php echo $_SESSION['nome'] ?>
                    </div>
                    <div id="nick-user">
                        @<?php echo $_SESSION['username'] ?>
                    </div>
                </div>
                <div class="dropup-center dropup">
                    <button id="options-user" class="options-button" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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

        <div id="conversas">
            <div id="conversas-title">
                Conversas
            </div>
            <div id="search-chats">
                <div class="search-container">
                    <input type="text" role="search" class="search-field">
                    <button type="button" class="search-button">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
            <div id="list-chats">
                <div class="chat-item placeholder-element">
                    <div class="chat-foto placeholder-glow">
                        <span class="placeholder"></span>
                    </div>
                    <div class="chat-name placeholder-glow">
                        <span class="placeholder col-7"></span>
                    </div>
                    <div class="chat-username placeholder-glow">
                        <span class="placeholder col-4"></span>
                    </div>
                    <div class="chat-message placeholder-glow">
                        <span class="placeholder col-4"></span>
                    </div>
                </div>
                <div class="chat-item placeholder-element">
                    <div class="chat-foto placeholder-glow">
                        <span class="placeholder"></span>
                    </div>
                    <div class="chat-name placeholder-glow">
                        <span class="placeholder col-7"></span>
                    </div>
                    <div class="chat-username placeholder-glow">
                        <span class="placeholder col-4"></span>
                    </div>
                    <div class="chat-message placeholder-glow">
                        <span class="placeholder col-4"></span>
                    </div>
                </div>
                <div class="chat-item placeholder-element">
                    <div class="chat-foto placeholder-glow">
                        <span class="placeholder"></span>
                    </div>
                    <div class="chat-name placeholder-glow">
                        <span class="placeholder col-7"></span>
                    </div>
                    <div class="chat-username placeholder-glow">
                        <span class="placeholder col-4"></span>
                    </div>
                    <div class="chat-message placeholder-glow">
                        <span class="placeholder col-4"></span>
                    </div>
                </div>
                <div class="chat-item placeholder-element">
                    <div class="chat-foto placeholder-glow">
                        <span class="placeholder"></span>
                    </div>
                    <div class="chat-name placeholder-glow">
                        <span class="placeholder col-7"></span>
                    </div>
                    <div class="chat-username placeholder-glow">
                        <span class="placeholder col-4"></span>
                    </div>
                    <div class="chat-message placeholder-glow">
                        <span class="placeholder col-4"></span>
                    </div>
                </div>
            </div>
            <div class="dropup-center dropup" id="new-chat-dropup">
                <button id="new-chat" type="button" data-bs-toggle="modal" data-bs-target="#modal-pesquisa">
                    <i class="bi bi-plus-lg"></i>
                </button>
            </div>
        </div>
        <main id="main" class="hide">
            <div id="main-title">
                <button class="voltar" id="voltar-chat">
                    <i class="bi bi-arrow-left"></i>
                </button>
                <a id="link-destino" class="hide">
                    <img src="../assets/media/foto.png" alt="" id="foto-chat">
                </a>
                <div>Escolha uma conversa ao lado</div>
                <div class="dropdown-start dropdown d-flex justify-content-end" id="config-chat">
                    <button class="options-button hide" id="options-chat" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-three-dots-vertical"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-sobe">
                        <li>
                            <a id="acessar-perfil" class="dropdown-item">
                                <i class="bi bi-person"></i>
                                Acessar perfil
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item">
                                <i class="bi bi-x"></i>
                                Excluir conversa
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="content">
                <img src="../assets/media/rosas.svg" class="rosa-fundo">

                <div id="crop-image" class="preview-file hide">
                    <div class="preview-title">
                        <button class="voltar">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                    </div>
                    <div class="preview-area">
                        <div class="result-crop"></div>
                    </div>
                    <div class="preview-send">
                        <div class="message-container" id="crop-message-container">
                            <input type="text" placeholder="Escreva uma mensagem" class="message-field" id="crop-message-field" autofocus>
                            <button class="message-button" id="crop-message-button" type="button">
                                <i class="bi bi-send"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div id="preview-audio" class="preview-file hide">
                    <div class="preview-title">
                        <button class="voltar">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                    </div>
                    <div class="preview-area">
                        <div class="audio">
                            <img src="../<?php echo $_SESSION['foto'] ?>" alt="">
                        </div>
                    </div>
                    <div class="preview-send">
                        <button class="message-button" id="send-audio-button" type="button">
                            <i class="bi bi-send"></i>
                        </button>
                    </div>
                </div>

                <p id="abra-conversa">Abra uma conversa</p>
                <button id="desce-chat" class="hide">
                    <i class="bi bi-arrow-down"></i>
                </button>

                <div id="chat">

                </div>

                <div class="message-container hide" id="main-message-container">
                    <div class="message-embeds dropdown-start dropup d-flex justify-content-end">
                        <button type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-plus-lg"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-sobe">
                            <li>
                                <label class="dropdown-item">
                                    <i class="bi bi-file-earmark-text-fill"></i>
                                    Documento
                                    <input type="file" id="message-document" class="message-embed">
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item">
                                    <i class="bi bi-soundwave"></i>
                                    Áudio
                                    <input type="file" id="message-audio" accept="audio/*" class="message-embed">
                                </label>
                            </li>
                            <li>
                                <label class="dropdown-item">
                                    <i class="bi bi-image"></i>
                                    Imagem
                                    <input type="file" id="message-photo" accept="image/*" class="message-embed">
                                </label>
                            </li>
                        </ul>
                    </div>
                    <input type="text" placeholder="Escreva uma mensagem" class="message-field" id="main-message-field" autofocus>
                    <div class="message-send">
                        <button class="message-button hide" id="main-message-button" type="button">
                            <i class="bi bi-send"></i>
                        </button>
                        <button class="message-button" id="record-message-button" type="button">
                            <i class="bi bi-mic-fill"></i>
                        </button>
                    </div>
                </div>
                <div class="message-container hide" id="record-message-container">
                    <div id="time">
                        0:00
                    </div>
                    <button class="message-button" type="button" id="stop-recording-button">
                        <i class="bi bi-stop-fill"></i>
                    </button>
                </div>

                <img src="../assets/media/rosas.svg" class="rosa-fundo">
            </div>
        </main>
    </div>

    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src='../assets/vendor/cropperjs/js/cropper.js'></script>
    <script src='../assets/vendor/wavesurfer/js/wavesurfer.js'></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/chat.js"></script>
    <script>
        type = 0

        <?php
        if (isset($_GET['username'])) {
            $vendedora = new Vendedora();
            $vendedora->setNomeUsuarioNegocioVendedora($_GET['username']);
            $dados = daoVendedora::consultarPorNomeUsuario($vendedora);

            if (!empty($dados)) {
        ?>
                resgatarMensagens('<?php echo $dados['nomeNegocioVendedora'] ?>', '../<?php echo $dados['fotoNegocioVendedora'] ?>', '<?php echo $dados['nomeUsuarioNegocioVendedora'] ?>')
        <?php
            }
        }
        ?>

        var searchField = document.querySelector('#pesquisar-vendedora'),
            searchResults = document.querySelector("#search-results")

        searchField.addEventListener('keyup',
            async e => {
                preencherListaPesquisa(`../api/dona/?search=${e.target.value}`, searchResults)
            })
    </script>
</body>

</html>