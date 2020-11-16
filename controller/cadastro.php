<?php

$smarty = new Template();
$clientes = new Clientes();

if (isset($_POST['cli_nome']) && isset($_POST['cli_email']) && isset($_POST['cli_cpf'])) {
    $nome = $_POST['cli_nome'];
    $sobrenome = $_POST['cli_sobrenome'];
    $data_nasc = $_POST['cli_data_nasc'];
    $rg = $_POST['cli_rg'];
    $cpf = $_POST['cli_cpf'];
    $ddd = $_POST['cli_ddd'];
    $fone = $_POST['cli_fone'];
    $celular = $_POST['cli_celular'];
    $endereco = $_POST['cli_endereco'];
    $numero = $_POST['cli_numero'];
    $bairro = $_POST['cli_bairro'];
    $cidade = $_POST['cli_cidade'];
    $uf = $_POST['cli_uf'];
    $cep = $_POST['cli_cep'];
    $email = $_POST['cli_email'];
    $senha = Sistema::GerarSenha();
    $data_cad = Sistema::DataAtualUS();
    $hora_cad = Sistema::HoraAtual();

    $clientes->preparaCliente($nome, $sobrenome, $data_nasc, $rg, $cpf, $ddd, $fone, $celular, $endereco, $numero, $bairro, $cidade, $uf, $cep, $email, $senha, $data_cad, $hora_cad);
    $clientes->insereCliente();
}

$smarty->display('cadastro.tpl');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

