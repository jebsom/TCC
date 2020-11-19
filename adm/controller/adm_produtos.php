<?php

$smarty = new Template();

$produtos = new Produtos();

if (isset(Rotas::$pag[1])) {
    $produtos->getProdutosCatID(Rotas::$pag[1]);
} else {
    $produtos->getProdutos();
}

//pag_produtosEdit_adm
$smarty->assign('PRODS', $produtos->getItens());
$smarty->assign('PROD_INFO', Rotas::pag_produtoInfo());
$smarty->assign('PROD_TOTAL', $produtos->TotalDados());
$smarty->assign('PAGINAS', $produtos->mostrarPaginacao());
$smarty->assign('PRODUTO_ADD', Rotas::pag_produtosAdd_adm());
$smarty->assign('PAG_PRODUTO_EDITAR', Rotas::pag_produtosEdit_adm());

$smarty->display('adm_produtos.tpl');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

