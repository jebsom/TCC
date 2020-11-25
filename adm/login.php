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

if (isset($_POST['recovery'])) {

    $user = new Usuario();
    $email = $_POST['txt_email'];
    $senha = Sistema::GerarSenha();

    if ($user->getUserEmail($email) > 0) {

        $user->alterarSenha($senha, $email);

        $enviar = new EnviarEmail();

        $assunto = 'Nova senha ADM do site ' . Sistema::DataAtualBR();
        $destinatarios = array($email, Config::SITE_EMAIL_ADM);
        $msg = ' Nova senha no ADM do site, nova senha:  ' . $senha;

        $enviar->Enviar($assunto, $msg, $destinatarios);
        echo '<div class="alert alert-success"> Foi enviado um email com a NOVA SENHA  </div>';
    } else {

        echo '<div class="alert alert-danger"> Email não encontrado </div>';
    }
}

$smarty->assign('HOME', Rotas::get_home());
$smarty->assign('GET_TEMPLATE', Rotas::get_template());
$smarty->display('adm_login.tpl');
