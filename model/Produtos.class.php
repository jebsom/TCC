<?php

Class Produtos extends Conex {

    private $prod_nome, $prod_categoria, $prod_ativo, $prod_modelo, $prod_refer, $prod_valor, $prod_estoque, $prod_peso, $prod_img, $prod_desc, $prod_slug;

//    $prod_altura, $prod_largura, $prod_comprimento
    function __construct() {
        parent::__construct();
    }

    function getProdutos() {

        $query = "SELECT
                    * 
                 FROM 
                    {$this->prefix}produtos p 
                INNER JOIN {$this->prefix}categorias c  ON p.prod_categoria = c.cat_id";

        $query .= " ORDER BY p.prod_id";
        $query .= $this->paginacaoLinks("prod_id", $this->prefix . "produtos");
        $this->ExecuteSQL($query);
        $this->getLista();
    }

    private function getLista() {
        $i = 1;
        while ($listar = $this->Listar()):
            $this->itens[$i] = array(
                'prod_id' => $listar['prod_id'],
                'prod_categoria' => $listar['prod_categoria'],
                'prod_nome' => $listar['prod_nome'],
                'prod_descricao' => $listar['prod_descricao'],
                'prod_valor_us' => $listar['prod_valor'],
                'prod_peso' => $listar['prod_peso'],
                'prod_valor' => Sistema::MoedaBR($listar['prod_valor']),
                'prod_img_p' => Rotas::imageLink($listar['prod_img'], 70, 70),
                'prod_img' => Rotas::imageLink($listar['prod_img'], 180, 180),
                'prod_img_g' => Rotas::imageLink($listar['prod_img'], 300, 300),
                'prod_slug' => $listar['prod_slug'],
                'prod_estoque' => $listar['prod_estoque'],
                'prod_modelo' => $listar['prod_modelo'],
                'prod_refer' => $listar['prod_refer'],
                'prod_fabricante' => $listar['prod_fabricante'],
                'prod_ativo' => $listar['prod_ativo'],
                'prod_frete_gratis' => $listar['prod_frete_gratis'],
                'cat_id' => $listar['cat_id'],
                'cat_nome' => $listar['cat_nome'],
                'prod_img_arquivo' => Rotas::get_raiz() . '/' . Rotas::getPastaImagens() . $listar['prod_img'],
                'prod_img_atual' => $listar['prod_img']
            );
            $i++;
        endwhile;
    }

    function getProdutosID($id) {
        $query = "SELECT
                    * 
                 FROM 
                    {$this->prefix}produtos p 
                INNER JOIN {$this->prefix}categorias c  ON p.prod_categoria = c.cat_id
                AND prod_id = :id";

        $params = array(':id' => (int) $id);
        $this->ExecuteSQL($query, $params);
        $this->getLista();
    }

    function getProdutosCatID($id) {
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);
        $query = "SELECT
                    * 
                 FROM 
                    {$this->prefix}produtos p 
                INNER JOIN {$this->prefix}categorias c  ON p.prod_categoria = c.cat_id";
        $query .= " AND p.prod_categoria= :id";
        $query .= $this->paginacaoLinks("prod_id", $this->prefix . "produtos WHERE prod_categoria =" . (int) $id);

        $params = array(':id' => (int) $id);
        $this->ExecuteSQL($query, $params);
        $this->getLista();
    }

    function prepararProdutos($prod_nome, $prod_categoria, $prod_ativo, $prod_modelo, $prod_refer, $prod_valor, $prod_estoque, $prod_peso, $prod_img, $prod_desc, $prod_slug = null) {

        $this->setProd_nome($prod_nome);
        $this->setProd_categoria($prod_categoria);
        $this->setProd_ativo($prod_ativo);
        $this->setProd_modelo($prod_modelo);
        $this->setProd_refer($prod_refer);
        $this->setProd_valor($prod_valor);
        $this->setProd_estoque($prod_estoque);
        $this->setProd_peso($prod_peso);
//        $this->setProd_altura($prod_altura);
//        $this->setProd_largura($prod_largura);
//        $this->setProd_comprimento($prod_comprimento);
        $this->setProd_img($prod_img);
        $this->setProd_desc($prod_desc);
        $this->setProd_slug($prod_nome);
    }

    function inserirProdutos() {

        $query = "INSERT INTO {$this->prefix}produtos (prod_nome, prod_categoria, prod_ativo, prod_modelo, prod_refer,";
        $query .= " prod_valor, prod_estoque, prod_peso , prod_img, prod_descricao, prod_slug)";
//        prod_altura, prod_largura, prod_comprimento ,
        $query .= " VALUES ";
        $query .= " ( :prod_nome, :prod_categoria, :prod_ativo, :prod_modelo, :prod_refer, :prod_valor, :prod_estoque, :prod_peso ,";
        $query .= "  :prod_img, :prod_desc, :prod_slug)";
//                . ", :prod_altura, :prod_largura, :prod_comprimento)*;

        $params = array(
            ':prod_nome' => $this->getProd_nome(),
            ':prod_categoria' => $this->getProd_categoria(),
            ':prod_ativo' => $this->getProd_ativo(),
            ':prod_modelo' => $this->getProd_modelo(),
            ':prod_refer' => $this->getProd_refer(),
            ':prod_valor' => $this->getProd_valor(),
            ':prod_estoque' => $this->getProd_estoque(),
            ':prod_peso' => $this->getProd_peso(),
//            ':prod_altura' => $this->getProd_altura(),
//            ':prod_largura' => $this->getProd_largura(),
//            ':prod_comprimento' => $this->getProd_comprimento(),
            ':prod_img' => $this->getProd_img(),
            ':prod_desc' => $this->getProd_desc(),
            ':prod_slug' => $this->getProd_slug(),
        );

        if ($this->ExecuteSQL($query, $params)) {
            return TRUE;
        } else {
//            echo '<pre>';
//            var_dump($query);
//            var_dump($params);
//            echo '</pre>';
            return FALSE;
        }
    }

    function editarProdutos() {

        $query = "UPDATE {$this->prefix}produtos SET (prod_nome, prod_categoria, prod_ativo, prod_modelo, prod_refer,";
        $query .= " prod_valor, prod_estoque, prod_peso , prod_img, prod_descricao, prod_slug)";
//        prod_altura, prod_largura, prod_comprimento ,
        $query .= " VALUES ";
        $query .= " ( :prod_nome, :prod_categoria, :prod_ativo, :prod_modelo, :prod_refer, :prod_valor, :prod_estoque, :prod_peso ,";
        $query .= "  :prod_img, :prod_desc, :prod_slug)";
//                . ", :prod_altura, :prod_largura, :prod_comprimento)*;

        $params = array(
            ':prod_nome' => $this->getProd_nome(),
            ':prod_categoria' => $this->getProd_categoria(),
            ':prod_ativo' => $this->getProd_ativo(),
            ':prod_modelo' => $this->getProd_modelo(),
            ':prod_refer' => $this->getProd_refer(),
            ':prod_valor' => $this->getProd_valor(),
            ':prod_estoque' => $this->getProd_estoque(),
            ':prod_peso' => $this->getProd_peso(),
//            ':prod_altura' => $this->getProd_altura(),
//            ':prod_largura' => $this->getProd_largura(),
//            ':prod_comprimento' => $this->getProd_comprimento(),
            ':prod_img' => $this->getProd_img(),
            ':prod_desc' => $this->getProd_desc(),
            ':prod_slug' => $this->getProd_slug(),
        );

        if ($this->ExecuteSQL($query, $params)) {
            return TRUE;
        } else {
//            echo '<pre>';
//            var_dump($query);
//            var_dump($params);
//            echo '</pre>';
            return FALSE;
        }
    }

    function getProd_nome() {
        return $this->prod_nome;
    }

    function getProd_categoria() {
        return $this->prod_categoria;
    }

    function getProd_ativo() {
        return $this->prod_ativo;
    }

    function getProd_modelo() {
        return $this->prod_modelo;
    }

    function getProd_refer() {
        return $this->prod_refer;
    }

    function getProd_valor() {
        return $this->prod_valor;
    }

    function getProd_estoque() {
        return $this->prod_estoque;
    }

    function getProd_peso() {
        return $this->prod_peso;
    }

    function getProd_img() {
        return $this->prod_img;
    }

    function getProd_desc() {
        return $this->prod_desc;
    }

    function getProd_slug() {
        return $this->prod_slug;
    }

    function setProd_nome($prod_nome) {
        $this->prod_nome = $prod_nome;
    }

    function setProd_categoria($prod_categoria) {
        $this->prod_categoria = $prod_categoria;
    }

    function setProd_ativo($prod_ativo) {
        $this->prod_ativo = $prod_ativo;
    }

    function setProd_modelo($prod_modelo) {
        $this->prod_modelo = $prod_modelo;
    }

    function setProd_refer($prod_refer) {
        $this->prod_refer = $prod_refer;
    }

    function setProd_valor($prod_valor) {
        $prod_valor = str_replace('.', '', $prod_valor);
        $prod_valor = str_replace(',', '.', $prod_valor);

        $this->prod_valor = $prod_valor;
    }

    function setProd_estoque($prod_estoque) {
        $this->prod_estoque = $prod_estoque;
    }

    function setProd_peso($prod_peso) {
        $this->prod_peso = str_replace(',', '.', $prod_peso);
        $this->prod_peso = $prod_peso;
    }

    function setProd_img($prod_img) {
        $this->prod_img = $prod_img;
    }

    function setProd_desc($prod_desc) {
        $this->prod_desc = $prod_desc;
    }

    function setProd_slug($prod_slug) {
        $this->prod_slug = Sistema::GetSlug($prod_slug);
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

