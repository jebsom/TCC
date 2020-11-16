<?php

$smarty = new Template();
$produtos = new Produtos();

if (isset(Rotas::$pag[1])) {
    $produtos->getProdutosCatID(Rotas::$pag[1]);
} else {
    $produtos->getProdutos();
}


$smarty->assign('PRODS', $produtos->getItens());
$smarty->assign('PROD_INFO', Rotas::pag_produtoInfo());
$smarty->assign('PROD_TOTAL', $produtos->TotalDados());
$smarty->assign('PAGINAS', $produtos->mostrarPaginacao());
//var_dump($produtos->getItens());
$smarty->display('produtos.tpl');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

