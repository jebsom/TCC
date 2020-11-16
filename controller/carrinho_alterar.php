<?php

if (!isset($_POST['prod_id']) || ($_POST['prod_id'] < 1)) {
    echo '<h4 class="alert alert-danger">Erro na operação. ID</h4>';
    Rotas::Redirecionar(1, Rotas::pag_carrinho());
    exit;
}
//var_dump($_POST['prod_id']);
(int) $id = $_POST['prod_id'];


$carrinho = new Carrinho();

try {

    $carrinho->addCarrinho($id);
} catch (Exception $ex) {
    echo '<h4 class="alert alert-danger">Erro na operação.</h4>';
}

Rotas::Redirecionar(1, Rotas::pag_carrinho());
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

