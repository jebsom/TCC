<?php

$smarty = new Template();
if (isset($_POST['prod_nome']) && isset($_POST['prod_valor'])) {

    $prod_nome = $_POST['prod_nome'];
    $prod_categoria = $_POST['prod_categoria'];
    $prod_ativo = $_POST['prod_ativo'];
    $prod_modelo = $_POST['prod_modelo'];
    $prod_ref = $_POST['prod_ref'];
    $prod_valor = $_POST['prod_valor'];
    $prod_estoque = $_POST['prod_estoque'];
    $prod_peso = $_POST['prod_peso'];
//    $prod_altura = $_POST['prod_altura'];
//    $prod_largura = $_POST['prod_largura'];
//    $prod_comprimento = $_POST['prod_comprimento'];
    $prod_img = $_FILES['prod_img']['name'];
    $prod_desc = $_POST['prod_desc'];
    $prod_slug = $_POST['prod_slug'];
}
$smarty->display('adm_produtos_add.tpl');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

