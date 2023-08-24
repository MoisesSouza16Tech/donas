<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");

require_once('../global.php');

if (isset($_GET['cpf'])) {
    $cpf = $_GET["cpf"];
    $count = daoCliente::verificaCpf($cpf);
    echo json_encode($count);
} else if (isset($_GET['username'])) {
    $username = $_GET["username"];
    $count = daoCliente::verificaNomeUsuario($username);
    echo json_encode($count);

} else if (isset($_GET['email'])) {
    $email = $_GET["email"];
    $count = daoCliente::verificaEmail($email);
    echo json_encode($count);
}

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case "POST":

        $cliente = new Cliente();

        $cliente->setNomeCliente($_POST['nome']);
        $cliente->setEmailCliente($_POST['email']);
        $cliente->setNomeUsuarioCliente($_POST['username']);
        $cliente->setSenhaCliente($_POST['pass']);
        $cliente->setCepCliente($_POST['cep']);

        $cpf = str_replace('.', '', $_POST['cpf']);
        $cliente->setCpfCliente($cpf);

        $cliente->setDtNascCliente($_POST['nasc']);
        $cliente->setLogradouroCliente($_POST['log']);
        $cliente->setBairroCliente($_POST['bairro']);
        $cliente->setCidadeCliente($_POST['cidade']);
        $cliente->setEstadoCliente($_POST['uf']);
        $cliente->setComplementoCliente($_POST['comp']);
        $cliente->setNumeroCliente($_POST['num']);

        daoCliente::cadastrar($cliente);

        $id = daoCliente::consultarIdPorEmail($cliente);

        $nomeimagem = $_FILES['foto']['name'];
        $tipo = $_FILES['foto']['type'];

        $extensao = substr($nomeimagem, -4);
        $extensao == 'jpeg' ? $extensao = substr($nomeimagem, -5) : $extensao;

        $arquivo = "assets/img/users/clientes/" . $id . $extensao;

        move_uploaded_file($_FILES['foto']['tmp_name'], "../../" . $arquivo);

        $cliente->setIdCliente($id);
        $cliente->setFotoCliente($arquivo);

        daoCliente::editarFoto($cliente);
        break;

    case "PUT":

        //a acrescentar...

        break;

    case "DELETE":

        //a acrescentar...

        break;
}
