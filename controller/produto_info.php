
<?php

$smarty = new Template();

$produtos = new Produtos();
$produtos->getProdutosID(Rotas::$pag[1]);

$images = new ProdutosImages();
$images->getImagesProd(Rotas::$pag[1]);

$smarty->assign('PRODS', $produtos->getItens());
$smarty->assign('IMAGES', $images->getItens());
$smarty->assign('GET_TEMPLATE', Rotas::get_template());
$smarty->assign('PAG_COMPRAR', Rotas::pag_carrinho_alterar());


//$id = Rotas::$pag[1];
//foreach ($produtos->getItens() as $prod) {
//
//    $_SESSION['PRODS'][$id]['ID'] = $prod['prod_id'];
//    $_SESSION['PRODS'][$id]['NOME'] = $prod['prod_nome'];
//    $_SESSION['PRODS'][$id]['VALOR'] = $prod['prod_valor'];
//    $_SESSION['PRODS'][$id]['QTD'] = 1;
//    $_SESSION['PRODS'][$id]['IMG'] = $prod['prod_img_p'];
//    $_SESSION['PRODS'][$id]['LINK'] = 'sssslink';
//    $id++;
//}

$smarty->display('produto_info.tpl');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

