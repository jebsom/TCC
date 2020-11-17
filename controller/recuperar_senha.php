<?php

$smarty = new Template();

$cliente = new Clientes();

if (isset($_POST['cli_email'])) {
    $cliente->setCli_email($_POST['cli_email']);

    if ($cliente->getClienteEmail($cliente->getCli_email()) > 0) {
        $novaSenha = Sistema::GerarSenha();
        $cliente->senhaUpdate($novaSenha, $cliente->getCli_email());

        $email = new EnviarEmail();
        $assunto = 'Recuperação de Senha de - ' . Config::SITE_NOME;
        $msg = 'Olá cliente! <br>'
                . 'Foi solicitado uma nova senha para sua conta.<br>'
                . 'Sua nova senha é: ' . $novaSenha . '<br>';
        $msg .= 'Acesse a sua conta com esta nova senha para realizar a troca.<br>'
                . '' . Config::SITE_URL;
        $destinatarios = array($cliente->getCli_email(), Config::SITE_EMAIL_ADM);
        $email->Enviar($assunto, $msg, $destinatarios);

        echo '<h3 class="alert alert-success">Sucesso, nova senha enviada ao e-mail informado.</h3>';
        Rotas::redirecionar(3, Rotas::pag_cliente_login());
    } else {
        echo '<h3 class="alert alert-danger">Opa... E-mail não encontrado em nossa base de dados. Redirecionando... </h3>';
        Rotas::redirecionar(3, Rotas::pag_recuperar_senha());
    }
} else {

    $smarty->display('recuperar_senha.tpl');
}
    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

    