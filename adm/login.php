<?php

date_default_timezone_set('America/Sao_Paulo');

if (!isset($_SESSION)) {
    session_start();
}
require '../lib/autoload.php';
$smarty = new Template();

if (isset($_POST['txt_logar']) && isset($_POST['txt_email'])) {
    $usuario = $_POST['txt_email'];
    $senha = $_POST['txt_senha'];
    $login = new Login();
    $login->getLoginAdm($usuario, $senha);
    if ($login->getLoginAdm($usuario, $senha)) {
        echo '<div class="alert alert-success">Login efetuado com sucesso!!</div>';
        Rotas::Redirecionar(1, 'index.php');
    }
}

$smarty->assign('GET_TEMPLATE', Rotas::get_template());
$smarty->display('adm_login.tpl');
