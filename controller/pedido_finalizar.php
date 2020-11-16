<?php

if (!login::logado()) {
    login::acessoNegado();
    Rotas::redirecionar(3, Rotas::pag_cliente_login());
} else {

    if (isset($_SESSION['PRODS'])) {

        $smarty = new Template();
        $carrinho = new Carrinho();

        if (!isset($_SESSION['PED']['frete'])) {
            Rotas::redirecionar(2, Rotas::pag_carrinho() . '#dadosfrete');
            exit('<h4 class="alert alert-danger">Realize o cálculo de frete para continuar! Voltando ao Carrinho ...</h4>');
        }
        $referCodPedido = date('umdHms') . $_SESSION['CLI']['cli_id'];
        if (!isset($_SESSION['PED']['pedido'])) {
            $_SESSION['PED']['pedido'] = $referCodPedido;
        }

        if (!isset($_SESSION['PED']['refer'])) {
            $_SESSION['PED']['refer'] = $referCodPedido;
        }

        $smarty->assign('PRODS', $carrinho->getCarrinho());
        $smarty->assign('GET_TEMPLATE', Rotas::get_template());
        $smarty->assign('V_TOTAL', Sistema::MoedaBR($carrinho->getTotal()));
        $smarty->assign('NOME_CLIENTE', $_SESSION['CLI']['cli_nome']);
        $smarty->assign('SITE_NOME', Config::SITE_NOME);
        $smarty->assign('SITE_HOME', Rotas::get_home());
        $smarty->assign('PAG_CONTA', Rotas::pag_conta());

        $pedido = new Pedidos();

        $smarty->assign('FRETE', Sistema::MoedaBR($_SESSION['PED']['frete']));
        $smarty->assign('TOTAL_COM_FRETE', Sistema::MoedaBR($_SESSION['PED']['total_com_frete']));

        $cliente = $_SESSION['CLI']['cli_id'];
        $cod = $_SESSION['PED']['pedido'];
        $refer = $_SESSION['PED']['refer'];
        $frete = $_SESSION['PED']['frete'];

        $email = new EnviarEmail();

        $destinatarios = array(Config::SITE_EMAIL_ADM, $_SESSION['CLI']['cli_email']);
        $assunto = 'Pedido de JVTecnologia - ' . Sistema::DataAtualBR();
        $msg = $smarty->fetch('email_compra.tpl');

        $email->Enviar($assunto, $msg, $destinatarios);

        if ($pedido->pedidoGravar($cliente, $cod, $refer, $frete)) {
            $pedido->limparSessao();
        }

        $smarty->display('pedido_finalizar.tpl');
    } else {
        echo '<h4 class="alert alert-danger">Carrinho vazio.</h>';
    }
}