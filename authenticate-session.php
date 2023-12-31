<?php

require_once "global.php";

$tipoLogin = $_POST['tipo-login'];

if($tipoLogin==1){
    $cliente = new Cliente();
    $cliente->setEmailCliente($_POST['email']);

    $consultaCliente = daoCliente::consultarPorEmail($cliente);
    if($consultaCliente == 0 || !password_verify($_POST['pass'], $consultaCliente['senhaCliente'])){
        header("Location: login.php");
    }else{
        session_start();

        $_SESSION['id']=$consultaCliente['idCliente'];
        $_SESSION['nome']=$consultaCliente['nomeCliente'];
        $_SESSION['username']=$consultaCliente['nomeUsuarioCliente'];
        $_SESSION['email']=$consultaCliente['emailCliente'];
        $_SESSION['senha']=$consultaCliente['senhaCliente'];
        $_SESSION['data-nasc']=$consultaCliente['dtNascCliente'];
        $_SESSION['foto']=$consultaCliente['fotoCliente'];
        $_SESSION['cidade']=$consultaCliente['cidadeCliente'];
        $_SESSION['estado']=$consultaCliente['estadoCliente'];
        $_SESSION['log']=$consultaCliente['logradouroCliente'];
        $_SESSION['bairro']=$consultaCliente['bairroCliente'];
        $_SESSION['num']=$consultaCliente['numeroCliente'];
        $_SESSION['comp']=$consultaCliente['complementoCliente'];
        $_SESSION['cep']=$consultaCliente['cepCliente'];
        $_SESSION['cpf']=$consultaCliente['cpfCliente'];
        $_SESSION['senha-normal'] = $_POST['pass'];
        $_SESSION['tipo-login']=0;

        header("Location: user/");
    }
}else{
    $vendedora = new Vendedora();
    $vendedora->setEmailVendedora($_POST['email']);

    $consultaVendedora = daoVendedora::consultarPorEmail($vendedora);
    if($consultaVendedora == 0 || !password_verify($_POST['pass'], $consultaVendedora['senhaVendedora'])){
        header("Location: login.php");
    }else{
        session_start();

        $_SESSION['id']=$consultaVendedora['idVendedora'];
        $_SESSION['nome']=$consultaVendedora['nomeVendedora'];
        $_SESSION['email']=$consultaVendedora['emailVendedora'];
        $_SESSION['senha']=$consultaVendedora['senhaVendedora'];
        $_SESSION['data-nasc']=$consultaVendedora['dtNascVendedora'];
        $_SESSION['foto']=$consultaVendedora['fotoVendedora'];
        $_SESSION['nome-empresa']=$consultaVendedora['nomeNegocioVendedora'];
        $_SESSION['username']=$consultaVendedora['nomeUsuarioNegocioVendedora'];
        $_SESSION['bio']=$consultaVendedora['bioNegocioVendedora'];
        $_SESSION['foto-empresa']=$consultaVendedora['fotoNegocioVendedora'];
        $_SESSION['cidade']=$consultaVendedora['cidadeNegocioVendedora'];
        $_SESSION['estado']=$consultaVendedora['estadoNegocioVendedora'];
        $_SESSION['log']=$consultaVendedora['logNegocioVendedora'];
        $_SESSION['bairro']=$consultaVendedora['bairroNegocioVendedora'];
        $_SESSION['num']=$consultaVendedora['numNegocioVendedora'];
        $_SESSION['comp']=$consultaVendedora['compNegocioVendedora'];
        $_SESSION['cep']=$consultaVendedora['cepNegocioVendedora'];
        $_SESSION['cnpj']=$consultaVendedora['cnpjNegocioVendedora'];
        $_SESSION['nivel-vendedora']=$consultaVendedora['nivelNegocioVendedora'];
        $_SESSION['tel']=$consultaVendedora['telefoneNegocioVendedora'];
        $_SESSION['chave']=$consultaVendedora['chavePixVendedora'];
        $_SESSION['categoria-id']=$consultaVendedora['idCategoria'];
        $_SESSION['senha-normal'] = $_POST['pass'];
        $_SESSION['tipo-login']=1;

        header("Location: dona/");
    }
}
