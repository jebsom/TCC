<?php

$smarty = new Template();

$prod_id = (int) $_POST['prod_id'];
if (isset($_POST['prod_id']) && isset($_FILES['prod_img']['name'])) {

    $upload = new ImageUpload();

    if (!empty($_FILES['prod_img']['name'])) {

        $upload->Upload(900, 'prod_img');
        $prod_img = $upload->retorno;

        $gravar = new ProdutosImages();
        $gravar->insereImages($prod_img, $prod_id);
    }
}

if (isset($_POST['fotos_apagar'])) {
    $apagar = new ProdutosImages();
    foreach ($_POST['fotos_apagar'] as $foto) {
        $apagar->deletarImagens($foto);
        $filename = Rotas::get_raiz() . '/' . Rotas::getPastaImagens() . $foto;
        @unlink($filename);
    }
    echo '<div class="alert alert-warning"> Exclusão realizada com sucesso!!</div>';
}

$img = new ProdutosImages($prod_id);
$img->getImagesProd($_POST['prod_id']);

$smarty->assign('IMAGES', $img->getItens());
$smarty->assign('PROD', $prod_id);

$smarty->display('adm_produtos_img.tpl');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

