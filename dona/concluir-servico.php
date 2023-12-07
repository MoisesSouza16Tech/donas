<?php
    require_once 'global.php';
    header("Location: encomendas.php");

    session_start();
    
    date_default_timezone_set('America/Sao_Paulo');

    $agendar = new PedidoServico();

    $agendar->setIdPedidoServico($_GET['e']);

    daoPedidoServico::finalizar($agendar);
    
    $id = daoPedidoServico::consultarPorId($_GET['e'])['idAnuncio'];
    $idcliente = daoPedidoServico::consultarPorId($_GET['e'])['idCliente'];
    
    $notific = new NotifcCliente();

    $cliente = new Cliente();

    $cliente->setIdCliente($idcliente);
    $notific->setCliente($cliente);

    $denuncia = new Denuncia();
    $denuncia->setIdDenuncia(null);

    $anuncio = new Anuncio();

    $anuncio->setIdAnuncio($id);
    $notific->setAnuncio($anuncio);

    $notific->setTipoNotificacao(10);
    $notific->setStatusNotificacao(0);

    daoNotifcCliente::cadastrar($notific);
?>
