
<?php

//echo $_SESSION['pedido'];
//var_dump($_SESSION);
if (isset($_SESSION['PRODS'])) {

    $smarty = new Template();
    $carrinho = new Carrinho();

    $smarty->assign('PRODS', $carrinho->getCarrinho());
    $smarty->assign('PESO', number_format($carrinho->getPeso(), 3, '.', ''));
    $smarty->assign('V_TOTAL', Sistema::MoedaBR($carrinho->getTotal()));
    $smarty->assign('PAG_CARRINHO_ALT', Rotas::pag_carrinho_alterar());
    $smarty->assign('PAG_PRODUTOS', Rotas::pag_produtos());
    $smarty->assign('PAG_CONFIRMAR', Rotas::pag_pedido_confirmar());

    $smarty->display('carrinho.tpl');
} else {
    Login::clienteMenu();
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

    