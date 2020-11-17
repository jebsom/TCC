<?php

$smarty = new Template();
Login::clienteMenu();

if (isset($_POST['cli_senha_atual']) && isset($_POST['cli_senha'])) {
    $senhaAtual = md5($_POST['cli_senha_atual']);
    $senhaNova = $_POST['cli_senha'];
    $email = $_SESSION['CLI']['cli_email'];
    if ($senhaAtual != $_SESSION['CLI']['cli_pwd']) {
        echo '<h3 class="alert alert-danger" id="erro_mostrar">Senha atual está incorreta. Redirecionando...</h3>';
        Rotas::redirecionar(3, Rotas::pag_clientes_senha());
        exit();
    }
    $clientes = new Clientes();
    $clientes->senhaUpdate($senhaNova, $email);
} else {

    $smarty->display('clientes_senha.tpl');
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

