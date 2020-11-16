<?php

$smarty = new Template();
$smarty->assign('BANNER', Rotas::imageLink('banner.jpg', 750, 230));
$smarty->display('home.tpl');

include_once Rotas::getPastaController() . '/produtos.php';


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

