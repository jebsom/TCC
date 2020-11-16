<?php

Class Produtos extends Conex {

    function __construct() {
        parent::__construct();
    }

    function getProdutos() {
        //query para realizar a busca de produtos de uma determinada categoria.

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
                'cat_nome' => $listar['cat_nome']
            );
            $i++;
        endwhile;
    }

    function getProdutosID($id) {
        //query para realizar a busca de produtos de uma determinada categoria.

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
        //query para realizar a busca de produtos de uma determinada categoria.
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

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

