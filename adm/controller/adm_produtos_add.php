<?php

$smarty = new Template();
if (isset($_POST['prod_nome']) && isset($_POST['prod_valor'])) {

    $prod_nome = $_POST['prod_nome'];
    $prod_categoria = $_POST['prod_categoria'];
    $prod_ativo = $_POST['prod_ativo'];
    $prod_modelo = $_POST['prod_modelo'];
    $prod_refer = $_POST['prod_refer'];
    $prod_valor = $_POST['prod_valor'];
    $prod_estoque = $_POST['prod_estoque'];
    $prod_peso = $_POST['prod_peso'];
//    $prod_altura = $_POST['prod_altura'];
//    $prod_largura = $_POST['prod_largura'];
//    $prod_comprimento = $_POST['prod_comprimento'];
    $prod_img = $_FILES['prod_img']['name'];
    $prod_descricao = $_POST['prod_descricao'];
    $prod_slug = $_POST['prod_slug'];

    if (!empty($_FILES)) {
        $upload = new ImageUpload();
        if ($upload->Upload(900, 'prod_img')) {
            $prod_img = $upload->retorno;
        } else {
            exit('Erro ao enviar imagem!');
        }
    }

    $gravar = new Produtos();

    $gravar->prepararProdutos($prod_nome, $prod_categoria, $prod_ativo, $prod_modelo, $prod_refer, $prod_valor, $prod_estoque, $prod_peso, $prod_img, $prod_descricao, $prod_slug);

    if ($gravar->inserirProdutos()) {
        echo '<div class="alert alert-success">Produto cadastrado com sucesso</div>';
        Rotas::redirecionar(2, Rotas::pag_produtos_adm());
    } else {
        echo '<div class="alert alert-darger">Erro ao cadastrar o produto.' . Sitema::VoltarPagina() . '</div>';

        exit();
    }
}
$categorias = new Categorias();
$categorias->getCategorias();

$smarty->assign('CATEGORIAS', $categorias->getItens());
$smarty->assign('GET_TEMA', Rotas::get_template());

$smarty->display('adm_produtos_add.tpl');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

