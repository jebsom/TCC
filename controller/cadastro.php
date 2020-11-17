<?php

$smarty = new Template();
$clientes = new Clientes();

if (isset($_POST['cli_nome']) && isset($_POST['cli_email']) && isset($_POST['cli_cpf'])) {
    $cli_nome = $_POST['cli_nome'];
    $cli_sobrenome = $_POST['cli_sobrenome'];
    $cli_data_nasc = $_POST['cli_data_nasc'];
    $cli_rg = $_POST['cli_rg'];
    $cli_cpf = $_POST['cli_cpf'];
    $cli_ddd = $_POST['cli_ddd'];
    $cli_fone = $_POST['cli_fone'];
    $cli_celular = $_POST['cli_celular'];
    $cli_endereco = $_POST['cli_endereco'];
    $cli_numero = $_POST['cli_numero'];
    $cli_bairro = $_POST['cli_bairro'];
    $cli_cidade = $_POST['cli_cidade'];
    $cli_uf = $_POST['cli_uf'];
    $cli_cep = $_POST['cli_cep'];
    $cli_email = $_POST['cli_email'];
    $cli_senha = Sistema::GerarSenha();
    $cli_data_cad = Sistema::DataAtualUS();
    $cli_hora_cad = Sistema::HoraAtual();

    $clientes->preparaCliente($cli_nome, $cli_sobrenome, $cli_data_nasc, $cli_rg, $cli_cpf, $cli_ddd, $cli_fone, $cli_celular, $cli_endereco, $cli_numero, $cli_bairro, $cli_cidade, $cli_uf, $cli_cep, $cli_email, $cli_senha, $cli_data_cad, $cli_hora_cad);
    $clientes->insereCliente();

    $smarty->assign('NOME', $cli_nome);
    $smarty->assign('SITE', Config::SITE_URL);
    $smarty->assign('EMAIL', $cli_email);
    $smarty->assign('SENHA', $cli_senha);
    $smarty->assign('PAG_MINHA_CONTA', Rotas::pag_cliente_conta());

    $email = new EnviarEmail();
    $assunto = 'Cadastro em - ' . Config::SITE_NOME;
    $msg = $smarty->fetch('email_cliente_cadastro.tpl');
    $destinatarios = array($cli_email, Config::SITE_EMAIL_ADM);
    $email->Enviar($assunto, $msg, $destinatarios);


    echo '<div class="alert alert-success">Cadastro realizado com sucesso!<br>'
    . 'Senha enviada para seu e-mail!</div>';
    Rotas::redirecionar(3, Rotas::pag_cliente_login());
} else {

    $smarty->display('cadastro.tpl');
}/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

