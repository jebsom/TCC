
<?php

//var_dump($_SESSION);

if (isset($_SESSION['PRODS'])) {

    if (!isset($_POST["frete_radio"])) {
        Rotas::redirecionar(2, Rotas::pag_carrinho() . '#dadosfrete');
        exit('<h4 class="alert alert-danger">Realize o cálculo de frete para continuar! Voltando ao Carrinho ...</h4>');
    }

    $smarty = new Template();
    $carrinho = new Carrinho();

    $smarty->assign('PRODS', $carrinho->getCarrinho());

    $_SESSION['PED']['frete'] = $_POST['frete_radio'];
    $_SESSION['PED']['total_com_frete'] = ($_POST['frete_radio'] + $carrinho->getTotal());

    $smarty->assign('V_TOTAL', Sistema::MoedaBR($carrinho->getTotal()));
    $smarty->assign('PAG_CARRINHO', Rotas::pag_carrinho());
    $smarty->assign('FRETE', Sistema::MoedaBR($_SESSION['PED']['frete']));
    $smarty->assign('TOTAL_COM_FRETE', Sistema::MoedaBR($_SESSION['PED']['total_com_frete']));
    $smarty->assign('PAG_CARRINHO_ALT', Rotas::pag_carrinho_alterar());
    $smarty->assign('PAG_PEDIDO_FINALIZAR', Rotas::pag_pedido_finalizar());

    $smarty->display('pedido_confirmar.tpl');
} else {
    echo '<h4 class="alert alert-danger">Carrinho vazio.</h>';
}
//echo "<pre>";
//var_dump($carrinho->getCarrinho());
//echo "</pre>";
    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

    