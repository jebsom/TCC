<?php

$smarty = new Template();
$categorias = new Categorias();

$categorias->getCategorias();

if (isset($_POST['cat_nova'])) {
    $cat_nome = $_POST['cat_nome'];
    if ($categorias->inserirCategoria($cat_nome)) {
        echo '<div class="alert alert-success"> Categoria inserida com sucesso!</div>';
        Rotas::redirecionar(0, Rotas::pag_categorias_adm());
        exit();
    }
}

if (isset($_POST['cat_editar'])) {
    $cat_id = $_POST['cat_id'];
    $cat_nome = $_POST['cat_nome'];
    if ($categorias->editarCategoria($cat_id, $cat_nome)) {
        echo '<div class="alert alert-success"> Categoria editada com sucesso!</div>';
        Rotas::redirecionar(1, Rotas::pag_categorias_adm());
        exit();
    }
}

if (isset($_POST['cat_apagar'])) {
    $cat_id = $_POST['cat_id'];
    if ($categorias->apagarCategoria($cat_id)) {
        echo '<div class="alert alert-success"> Categoria apagada com sucesso!</div>';
        Rotas::redirecionar(1, Rotas::pag_categorias_adm());
        exit();
    }
}


$smarty->assign('CATEGORIAS', $categorias->getItens());

$smarty->display('adm_categorias.tpl');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

