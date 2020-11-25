<?php

$smarty = new Template();
$produtos = new Produtos();

if (isset(Rotas::$pag[1]) && !isset($_POST['txt_buscar'])) {

    $produtos->getProdutosCatID(Rotas::$pag[1]);
} else if (isset($_POST['txt_buscar'])) {

    $busca = filter_var($_POST['txt_buscar'], FILTER_SANITIZE_STRING);
    $produtos->getProdutosNome($busca);
} else if (isset($_POST['txt_buscar']) && isset(Rotas::$pag[1])) {

    $busca = filter_var($_POST['txt_buscar'], FILTER_SANITIZE_STRING);
    $produtos->getProdutosNome($busca);
} else {

    $produtos->getProdutos();
}


$smarty->assign('PRODS', $produtos->getItens());
$smarty->assign('PROD_INFO', Rotas::pag_produtoInfo());
$smarty->assign('PROD_TOTAL', $produtos->TotalDados());
$smarty->assign('PAGINAS', $produtos->mostrarPaginacao());
$smarty->assign('PRODUTOS', Rotas::pag_produtos());
//var_dump($produtos->getItens());
$smarty->display('produtos.tpl');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

