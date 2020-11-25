<?php

$smarty = new Template();

$ref = Rotas::$pag[1];

$smarty->assign('REF', $ref);
$smarty->assign('PAG_ITENS', Rotas::pag_clientes_itens());

$smarty->display('pedido_retorno_erro.tpl');
