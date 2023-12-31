<?php

require_once 'global.php';

header("Location: seus-pedidos.php");

session_start();

$encomenda = new PedidoProduto();
$encomenda->setIdPedidoProduto($_GET['p']);

daoPedidoProduto::cancelar($encomenda);

$id = daoPedidoProduto::consultarPorId($_GET['p'])['idAnuncio'];
$idcliente = $_SESSION['id'];
$idvendedora = daoAnuncio::consultarPorId($id)['idVendedora'];

$notific = new NotifcVendedora();

$cliente = new Cliente();
$cliente->setIdCliente($idcliente);
$notific->setCliente($cliente);


$anuncio = new Anuncio();
$anuncio->setIdAnuncio($id);
$notific->setAnuncio($anuncio);

$vendedora = new Vendedora();
$vendedora->setIdVendedora($idvendedora);
$notific->setVendedora($vendedora);

$notific->setTipoNotificacao(4);
$notific->setStatusNotificacao(0);

daoNotifcVendedora::cadastrar($notific);
