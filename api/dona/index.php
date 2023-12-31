<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");

require_once('../global.php');

if (isset($_GET['cnpj'])) {
    $cnpj = $_GET["cnpj"];
    $count = daoVendedora::verificaCnpj($cnpj);
    echo json_encode($count);
} else if (isset($_GET['username'])) {
    $username = $_GET["username"];
    $count = daoVendedora::verificaNomeUsuario($username);
    echo json_encode($count);
} else if (isset($_GET['email'])) {
    $email = $_GET["email"];
    $count = daoVendedora::verificaEmail($email);
    echo json_encode($count);
} else if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $result = daoVendedora::pesquisaVendedora($search);
    echo json_encode($result);
}

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case "POST":
        $vendedora = new Vendedora();

        $vendedora->setNomeVendedora($_POST['nome']);
        $vendedora->setEmailVendedora($_POST['email']);
        $vendedora->setSenhaVendedora(password_hash($_POST['pass'], PASSWORD_BCRYPT));
        $vendedora->setDtNascVendedora($_POST['nasc']);
        $vendedora->setStatusVendedora(1);
        $vendedora->setNomeNegocioVendedora($_POST['nome-empresa']);
        $vendedora->setNomeUsuarioNegocioVendedora($_POST['username-empresa']);
        $vendedora->setBioNegocioVendedora('');

        $tel = str_replace('-', '', $_POST['telefone']);

        $vendedora->setTelefoneNegocioVendedora($tel);

        $vendedora->setLogNegocio($_POST['log']);
        $vendedora->setCidadeNegocioVendedora($_POST['cidade']);
        $vendedora->setEstadoNegocioVendedora($_POST['uf']);
        $vendedora->setBairroNegocioVendedora($_POST['bairro']);
        $vendedora->setNumNegocioVendedora($_POST['num']);
        $vendedora->setCompNegocioVendedora($_POST['comp']);

        $cep = str_replace('-', '', $_POST['cep']);
        $vendedora->setCepNegocioVendedora($cep);

        $cnpj = str_replace('-', '', $_POST['cnpj']);
        $cnpj = str_replace('.', '', $cnpj);
        $cnpj = str_replace('/', '', $cnpj);
        $vendedora->setCnpjNegocioVendedora($cnpj);

        $vendedora->setNivelNegocioVendedora($_POST['nivel'] == "Premium" ? 1 : 0);

        $tipoChave = $_POST['tipo-chave'];
    
        $chave = $_POST['chave'];

        if($tipoChave == 1){
            $chave = str_replace('-', '', $chave);
            $chave = str_replace('.', '', $chave);
            $chave = str_replace('/', '', $chave);
        }else if($tipoChave == 3){
            $chave = str_replace('-', '', $chave);
            $chave = str_replace('(', '', $chave);
            $chave = str_replace(')', '', $chave);
            $chave = str_replace(' ', '', $chave);
        }

        $vendedora->setChavePixVendedora($chave);

        $categoria = new Categoria();

        $categoria->setIdCategoria($_POST['categoria']);

        $vendedora->setCategoria($categoria);

        daoVendedora::cadastrar($vendedora);

        $id = daoVendedora::consultarIdPorEmail($vendedora);
        $vendedora->setIdVendedora($id);

        $nomeimagem = $_FILES['foto-vendedora']['name'];
        $tipo = $_FILES['foto-vendedora']['type'];

        $extensao = substr($nomeimagem, -4);
        $extensao == 'jpeg' ? $extensao = substr($nomeimagem, -5) : $extensao;

        $arquivo = "assets/media/users/donas/" . $id . $extensao;

        move_uploaded_file($_FILES['foto-vendedora']['tmp_name'], "../../" . $arquivo);

        $vendedora->setFotoVendedora($arquivo);

        daoVendedora::editarFoto($vendedora);

        $nomeimagem = $_FILES['foto-empresa']['name'];
        $tipo = $_FILES['foto-empresa']['type'];

        $extensao = substr($nomeimagem, -4);
        $extensao == 'jpeg' ? $extensao = substr($nomeimagem, -5) : $extensao;

        $arquivo = "assets/media/users/negocios/" . $id . $extensao;

        move_uploaded_file($_FILES['foto-empresa']['tmp_name'], "../../" . $arquivo);

        $vendedora->setFotoNegocioVendedora($arquivo);

        daoVendedora::editarFotoNegocio($vendedora);

        $notific = new NotifcVendedora();

        $notific->setVendedora($vendedora);

        $notific->setTipoNotificacao(0);
        $notific->setStatusNotificacao(0);

        daoNotifcVendedora::cadastrar($notific);

        break;

    case "PUT":

        //a acrescentar...

        break;

    case "DELETE":

        //a acrescentar...

        break;
}
