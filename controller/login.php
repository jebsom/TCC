<?php

$smarty = new Template();
$login = new Login();
if (isset($_POST['txt_email']) && isset($_POST['txt_senha'])) {
    $user = $_POST['txt_email'];
    $senha = $_POST['txt_senha'];
    $login->getLogin($user, $senha);
}
if (Login::logado()) {
    $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
    $smarty->assign('PAG_LOGOFF', Rotas::pag_logoff());
    Login::clienteMenu();
}
$smarty->assign('LOGADO', Login::logado());
$smarty->assign('PAG_CADASTRO', Rotas::pag_cliente_cadastro());
$smarty->assign('PAG_RECUPERAR', Rotas::pag_recuperar_senha());

$smarty->display('login.tpl');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

