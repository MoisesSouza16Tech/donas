<?php

require_once "validador.php";
require_once "global.php";

if (isset($_GET['a'])) {
    $anuncio = daoAnuncio::consultarPorId($_GET['a']);
}

date_default_timezone_set('America/Sao_Paulo');


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($anuncio['nomeAnuncio']) ? $anuncio['nomeAnuncio'] :  'Nada foi encontrado.' ?></title>

    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/media/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-icons-1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <div id="user-product">
        <div class="modal pop" id="modal-confirma" tabindex="-1" aria-labelledby="modal-confirma" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Tem certeza?</h1>
                    </div>
                    <div class="modal-body d-flex flex-column text-center">
                        <i class="bi bi-box-seam"></i>
                        Você está prestes a <?php echo $anuncio['tipoAnuncio'] == 1 ? "agendar esse serviço" : "encomendar esse produto"; ?>. Tem certeza?
                    </div>
                    <div class="modal-footer d-flex justify-content-around">
                        <button type="button" class="button button-secondary" data-bs-dismiss="modal">Não</button>
                        <button type="button" class="button" data-bs-target="#modal-encomenda" data-bs-toggle="modal">Sim</button>
                    </div>
                </div>
            </div>
        </div>
        <form action="<?php echo $anuncio['tipoAnuncio'] == 1 ? "agendar-servico.php?a=" . $anuncio['idAnuncio'] : "fazer-encomenda.php?a=" . $anuncio['idAnuncio']; ?>" method="POST">
            <div class="modal pop" id="modal-encomenda" tabindex="-1" aria-labelledby="modal-encomenda" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5"><?php echo $anuncio['tipoAnuncio'] == 1 ? "Agendar serviço" : "Realizar encomenda"; ?></h1>
                        </div>
                        <div class="modal-body">
                            <?php if ($anuncio['tipoAnuncio'] == 1) { ?>
                                <div class="input input-cliente">
                                    <label class="form-label">Cliente</label>
                                    <div class="input-wrapper">
                                        <input type="text" disabled value="<?php echo $_SESSION['nome'] ?>">
                                    </div>
                                </div>
                                <div class="input input-dona">
                                    <label class="form-label">Negócio</label>
                                    <div class="input-wrapper">
                                        <input type="text" disabled value="<?php echo $anuncio['nomeNegocioVendedora'] ?>">
                                    </div>
                                </div>
                                <div class="input input-produto">
                                    <label class="form-label">Serviço</label>
                                    <div class="input-wrapper">
                                        <input type="text" disabled value="<?php echo $anuncio['nomeAnuncio'] ?>">
                                    </div>
                                </div>
                                <div class="input input-valor">
                                    <label class="form-label">Valor<span>*</span></label>
                                    <div class="input-wrapper">
                                        <input type="text" name="valor" id="valor" required disabled value="<?php echo $anuncio['valorAnuncio'] ?>">
                                    </div>
                                </div>
                                <div class="input input-data">
                                    <label class="form-label" for="data-entrega">Data de agendamento<span>*</span></label>
                                    <div class="input-wrapper">
                                        <input type="datetime-local" name="data-entrega-serviço" id="data-entrega-serviço" required value="<?php echo date("o-m-d\TH:i", time() + 60 * 60 * 24) ?>">
                                    </div>
                                    <div class="invalid-feedback">
                                        Insira uma data de entrega para o produto
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="input input-cliente">
                                    <label class="form-label">Cliente</label>
                                    <div class="input-wrapper">
                                        <input type="text" disabled value="<?php echo $_SESSION['nome'] ?>">
                                    </div>
                                </div>
                                <div class="input input-dona">
                                    <label class="form-label">Negócio</label>
                                    <div class="input-wrapper">
                                        <input type="text" disabled value="<?php echo $anuncio['nomeNegocioVendedora'] ?>">
                                    </div>
                                </div>
                                <div class="input input-produto">
                                    <label class="form-label">Produto</label>
                                    <div class="input-wrapper">
                                        <input type="text" disabled value="<?php echo $anuncio['nomeAnuncio'] ?>">
                                    </div>
                                </div>
                                <div class="input input-valor">
                                    <label class="form-label">Valor<span>*</span></label>
                                    <div class="input-wrapper">
                                        <input type="text" name="valor" id="valor" required disabled value="<?php echo $anuncio['valorAnuncio'] ?>" value="<?php echo $anuncio['valorAnuncio'] ?>">
                                    </div>
                                </div>
                                <div class="input input-data">
                                    <label class="form-label" for="data-entrega">Data de entrega<span>*</span></label>
                                    <div class="input-wrapper">
                                        <input type="date" name="data-entrega" id="data-entrega" required value="<?php echo date("o-m-d", time() + 60 * 60 * 24) ?>">
                                    </div>
                                    <div class="invalid-feedback">
                                        Insira uma data de entrega para o produto
                                    </div>
                                </div>
                                <div class="input input-qtd">
                                    <label class="form-label" for="qtd">Quantidade<span>*</span></label>
                                    <div class="input-wrapper">
                                        <input type="number" name="qtd" id="qtd" required value="1" min="1" oninput="atualizarValor()">
                                    </div>
                                    <div class="invalid-feedback">
                                        Insira uma quantidade para a encomenda
                                    </div>
                                </div>
                            <?php
                            } ?>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="button" id="iniciar-pagamento" data-bs-target="#modal-pagamento" data-bs-toggle="modal">Avançar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal pop" id="modal-pagamento" tabindex="-1" aria-labelledby="modal-pagamento" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5">Tem certeza?</h1>
                        </div>
                        <div class="modal-body">
                            <p class="text-center">Estamos quase no final! Escolha sua <span class="highlight">forma de pagamento</span>.</p>
                            <div class="input input-pagamento">
                                <label class="form-label" for="forma-pagamento">Forma de pagamento<span>*</span></label>
                                <div class="input-wrapper">
                                    <select name="forma-pagamento" id="forma-pagamento" required>
                                        <option value="1">PIX</option>
                                        <option value="2">Boleto</option>
                                    </select>
                                </div>
                                <div class="invalid-feedback">
                                    Insira uma quantidade para a encomenda
                                </div>
                            </div>
                            <div id="qrcode-pix">
                                <div id="loading-pix"></div>
                                <img src="" alt="QR Code do PIX" id="qr-code" class="hide">
                            </div>
                            <p class="text-center">Você tem <span class="highlight" id="tempo-restante">8 minutos e 0 segundos</span> restantes</p>
                        </div>
                        <div class="modal-footer d-flex justify-content-around">
                            <button type="submit" class="button">Confirmar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="modal pop" id="modal-cancelado" tabindex="-1" aria-labelledby="modal-cancelado" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Pedido cancelado</h1>
                    </div>
                    <div class="modal-body d-flex flex-column text-center">
                        Você demorou demais para confirmar sua encomenda e ela foi cancelada...
                    </div>
                    <div class="modal-footer d-flex justify-content-around">
                        <button type="button" class="button" data-bs-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>


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
                <a href="conversas.php" class="nav-link">
                    <i class="bi bi-chat"></i>
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
                <a href="../">
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
        <main id="main">
            <!-- <img src="../assets/media/rosas.svg" class="rosa-fundo"> -->
            <?php if (isset($anuncio['nomeAnuncio'])) { ?>

                <div id="content">

                    <div id="produto">
                        <div id="foto-anuncio">
                            <button onclick="history.back()" id="voltar">
                                <i class="bi bi-arrow-left"></i>
                            </button>
                            <img src="../<?php echo $anuncio['imagemPrincipalAnuncio'] ?>">
                        </div>
                        <div id="info-anuncio">
                            <div id="nome-anuncio">
                                <?php echo $anuncio['nomeAnuncio'] ?>
                            </div>
                            <div id="preco-anuncio">
                                R$<?php echo number_format($anuncio['valorAnuncio'], 2, ',', '.') ?>
                            </div>
                            <?php

                            $encomenda = new PedidoProduto();
                            $a = new Anuncio();
                            $c = new Cliente();

                            $a->setIdAnuncio($anuncio['idAnuncio']);
                            $c->setIdCliente($_SESSION['id']);

                            $encomenda->setAnuncio($a);
                            $encomenda->setCliente($c);

                            if ($anuncio['nivelNegocioVendedora'] == 1) {
                                $temEncomenda = daoPedidoProduto::consultaTemPedidos($encomenda);
                                $temEncomendaAtiva = daoPedidoProduto::consultaTemPedidoAtivo($encomenda);
                            ?>
                                <?php
                                if ($anuncio['tipoAnuncio'] == 1) {
                                ?>
                                    <button class="button button-square" id="encomendar" data-bs-target="#modal-confirma" data-bs-toggle="modal">Agendar</button>
                                <?php
                                } else {
                                ?> <button class="button button-square" id="encomendar" data-bs-target="#modal-confirma" data-bs-toggle="modal">Encomendar</button>
                            <?php
                                }
                            }
                            ?>
                            <div id="avaliacao-anuncio">
                                <?php
                                $qtdestrelas = $anuncio['estrelasAnuncio'];

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
                                $qtdavaliacoes = daoAvaliacao::contarAvaliacaoAnuncio($anuncio['idAnuncio']);

                                echo $qtdavaliacoes != 1 ? "(" . $qtdavaliacoes . " avaliações)" : "(" . $qtdavaliacoes . " avaliação)";
                                ?>
                            </div>
                            <div id="categoria-anuncio">
                                <?php echo $anuncio['nomeCategoria'] ?>
                            </div>
                            <div id="estoque-anuncio">
                                <?php
                                if ($anuncio['tipoAnuncio'] == 2) {
                                    echo $anuncio['qtdProduto'] != 1 ? $anuncio['qtdProduto'] . " unidades" : $anuncio['qtdProduto'] . " unidade";
                                }
                                ?>
                            </div>
                            <div class="accordion accordion-flush accordion-anuncio">
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-descricao" aria-expanded="true" aria-controls="collapse-descricao">
                                            Descrição
                                        </button>
                                    </h3>
                                    <div id="collapse-descricao" class="accordion-collapse collapse" data-bs-parent="#accordion-descricao">
                                        <div class="accordion-body"><?php echo $anuncio['descricaoAnuncio'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-empresa" aria-expanded="false" aria-controls="collapse-empresa">
                                            Sobre a empresa
                                        </button>
                                    </h3>
                                    <div id="collapse-empresa" class="accordion-collapse collapse" data-bs-parent="#accordion-empresa">
                                        <a class="accordion-body accordion-empresa" href="profile.php?user=<?php echo $anuncio['nomeUsuarioNegocioVendedora'] ?>">
                                            <img src="../<?php echo $anuncio['fotoNegocioVendedora'] ?>" id="foto-accordion">
                                            <div id="empresa-anuncio">
                                                <?php
                                                echo $anuncio['nomeNegocioVendedora'];
                                                if ($anuncio['nivelNegocioVendedora'] == 1) {
                                                ?>
                                                    <i class="bi bi-gem highlight"></i>
                                                <?php
                                                }

                                                ?>
                                            </div>
                                            <div id="categoria-empresa">
                                                <?php echo $anuncio['nomeCategoria'] ?>
                                            </div>
                                            <div id="anuncios-empresa">
                                                <?php
                                                $qtdanuncio = daoAnuncio::contarAnuncioGeral($anuncio['idVendedora']);

                                                echo $qtdanuncio != 1 ? $qtdanuncio . " anúncios" : $qtdanuncio . " anúncio";
                                                ?>
                                            </div>
                                            <div id="seguidores-empresa">
                                                <?php
                                                $qtdseguidores = daoSeguidor::contarSeguidor($anuncio['idVendedora']);

                                                echo $qtdseguidores != 1 ? $qtdseguidores . " seguidores" : $qtdseguidores . " seguidor";
                                                ?>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="comentarios-anuncio">
                        <div id="comentarios-titulo">
                            Avaliações
                        </div>
                        <?php

                        $foiFinalizada = daoPedidoProduto::foiFinalizada($encomenda);
                        if ($foiFinalizada) {
                        ?>
                            <form id="input-comentario" method="post" action="avaliar-anuncio.php?a=<?php echo $anuncio['idAnuncio'] ?>" class="needs-validation" novalidate>
                                <img src="../<?php echo $_SESSION['foto'] ?>" id="foto-comentario">
                                <div id="nome-comentario">
                                    <?php echo $_SESSION['nome'] ?>
                                </div>
                                <div id="avaliacao">
                                    <input value="5" name="rate" id="star5" type="radio">
                                    <label title="text" for="star5"></label>
                                    <input value="4" name="rate" id="star4" type="radio">
                                    <label title="text" for="star4"></label>
                                    <input value="3" name="rate" id="star3" type="radio">
                                    <label title="text" for="star3"></label>
                                    <input value="2" name="rate" id="star2" type="radio">
                                    <label title="text" for="star2"></label>
                                    <input value="1" name="rate" id="star1" type="radio">
                                    <label title="text" for="star1"></label>
                                </div>
                                <div class="input" id="textarea-comentario">
                                    <div class="input-wrapper">
                                        <textarea name="comentario" id="comentario" cols="30" rows="4" placeholder="Sua avaliação" required></textarea>
                                    </div>
                                    <div class="invalid-feedback">
                                        Você não preencheu o campo de conteúdo.
                                    </div>
                                </div>
                                <div class="input input-enviar">
                                    <button class="button button-square" id="enviar">Enviar</button>
                                </div>
                            </form>
                        <?php
                        }
                        ?>
                        <div id="comentarios">
                            <?php
                            $avaliacoes = daoAvaliacao::listarPorAnuncio($anuncio['idAnuncio']);

                            foreach ($avaliacoes as $a) {
                            ?>
                                <div class="comentario">
                                    <img src="../<?php echo $a['fotoCliente'] ?>" class="foto-comentario">
                                    <div class="nome-comentario">
                                        <?php echo $a['nomeCliente'] ?>
                                    </div>
                                    <div class="avaliacao-comentario">
                                        <?php
                                        $qtdestrelas = $a['estrelasAvaliacao'];

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
                                    <div class="conteudo-comentario">
                                        <?php echo $a['conteudoAvaliacao'] ?>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>
            <?php
            } else {
            ?>
                <h2 class="mx-auto my-auto">Nenhum anúncio foi encontrado.</h2>
            <?php
            } ?>
            <!-- <img src="../assets/media/rosas.svg" class="rosa-fundo"> -->
        </main>

    </div>

    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script>
        var iniciarPagamento = document.getElementById('iniciar-pagamento'),
            inputComentario = document.querySelector("#input-comentario"),
            conteudoInputComentario = document.querySelector("#comentario")

        let cronometro;


        iniciarPagamento.addEventListener('click', () => {
            clearInterval(cronometro)

            let qrCodeImg = document.querySelector('#qr-code')
            let loadingQrCode = document.querySelector('#loading-pix')
            qrCodeImg.src = ''

            qrCodeImg.classList.add('hide')
            loadingQrCode.classList.remove('hide')

            let tempoFinal = new Date().getTime() + 8 * 60 * 1000;

            cronometro = setInterval(() => {

                let tempoInicial = new Date().getTime();

                let distancia = tempoFinal - tempoInicial;

                var minutos = Math.floor((distancia % (1000 * 60 * 60)) / (1000 * 60));
                var segundos = Math.floor((distancia % (1000 * 60)) / 1000);

                if (distancia > 0) {
                    document.getElementById('tempo-restante').innerText = `${minutos} minutos e ${segundos} segundos`;
                } else {
                    document.getElementById('tempo-restante').innerText = `0 minutos e 0 segundos`;
                    clearInterval(cronometro);

                    document.getElementById('modal-pagamento').classList.remove('show')
                    document.getElementById('modal-pagamento2').classList.remove('show')
                    document.querySelector('.modal-backdrop').remove()
                    new bootstrap.Modal(document.getElementById('modal-cancelado')).toggle();
                }
            }, 1000)

            let valor = document.querySelector('#valor').value

            fetch('../api/encomenda/?v=<?php echo $anuncio['nomeUsuarioNegocioVendedora'] ?>&p=' + valor)
                .then(response => response.blob())
                .then(blob => {
                    let url = URL.createObjectURL(blob)

                    qrCodeImg.src = url

                    setTimeout(() => {
                        qrCodeImg.classList.remove('hide')
                        loadingQrCode.classList.add('hide')
                    }, 2000)

                })
        })

        inputComentario.addEventListener("submit", e => {

            e.preventDefault();
            e.stopPropagation()

            if (!inputComentario.checkValidity()) {
                inputComentario.classList.add('was-validated')
            } else {
                inputComentario.submit();
            }
        })
    </script>
    <script>
        function atualizarValor() {
            // Obtém referências aos elementos DOM
            var quantidadeInput = document.getElementById("qtd");
            var valorInput = document.getElementById("valor");

            // Obtém o valor original e a quantidade
            var valorItem = parseFloat(document.getElementById("valor").getAttribute("value"));
            var quantidade = parseInt(quantidadeInput.value);

            // Verifica se a quantidade é válida (maior que 0)
            if (quantidade > 0) {
                // Calcula o novo valor multiplicando a quantidade pelo valor do item
                var novoValor = valorItem * quantidade;

                // Atualiza o campo de valor com o novo valor calculado
                valorInput.value = novoValor.toFixed(2); // Arredonda para duas casas decimais
            } else {
                // Se a quantidade for 0 ou menor, define o valor como 0
                valorInput.value = 0;
            }
        }
    </script>
</body>

</html>