<?php

Class Categorias extends Conex {

    private $cat_id, $cat_nome, $cat_slug;

    function __construct() {
        parent:: __construct();
    }

    function getCategorias() {
        $query = "SELECT * FROM {$this->prefix}categorias";

        $this->ExecuteSQL($query);
        $this->getLista();
    }

    private function getLista() {
        $i = 1;
        while ($listar = $this->Listar()):
            $this->itens[$i] = array(
                'cat_id' => $listar['cat_id'],
                'cat_nome' => $listar['cat_nome'],
                'cat_slug' => $listar['cat_slug'],
                'cat_link' => Rotas::pag_produtos() . '/' . $listar['cat_id'] . '/' . $listar['cat_slug']
            );
            $i++;
        endwhile;
    }

    function inserirCategoria($cat_nome) {

        $this->setCat_nome($cat_nome);
        $this->setCat_slug($cat_nome);

        $query = " INSERT INTO {$this->prefix}categorias (cat_nome, cat_slug )";
        $query .= " VALUES (:cat_nome, :cat_slug )";

        $params = array(':cat_nome' => $this->getCat_nome(),
            ':cat_slug' => $this->getCat_slug(),
        );
        if ($this->ExecuteSQL($query, $params)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function editarCategoria($cat_id, $cat_nome) {

        $this->setCat_nome($cat_nome);
        $this->setCat_slug($cat_nome);

        $query = " UPDATE {$this->prefix}categorias ";
        $query .= " SET cat_nome = :cat_nome, cat_slug = :cat_slug ";
        $query .= " WHERE cat_id = :cat_id ";

        $params = array(':cat_nome' => $this->getCat_nome(),
            ':cat_slug' => $this->getCat_slug(),
            ':cat_id' => (int) $cat_id,
        );
        if ($this->ExecuteSQL($query, $params)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function apagarCategoria($cat_id) {

        $pro = new Produtos();
        $pro->GetProdutosCatID($cat_id);

        if ($pro->TotalDados() > 0) {
            echo '<div class="alert alert-danger" > Esta categoria tem: ';
            echo $pro->TotalDados();
            echo ' produtos. Não pode ser apagada, para apagar precisa primeiro apagar os produtos dela </div>';
        } else {

            $query = " DELETE FROM {$this->prefix}categorias";
            $query .= " WHERE cat_id = :id";

            $params = array(':id' => (int) $cat_id);

            if ($this->ExecuteSQL($query, $params)) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }

//    function getCat_id() {
//        return $this->cat_id;
//    }

    function getCat_nome() {
        return $this->cat_nome;
    }

    function getCat_slug() {
        return $this->cat_slug;
    }

//    function setCat_id($cat_id): void {
//        $this->cat_id = $cat_id;
//    }

    function setCat_nome($cat_nome) {
        $this->cat_nome = filter_var($cat_nome, FILTER_SANITIZE_STRING);
    }

    function setCat_slug($cat_slug) {
        $this->cat_slug = Sistema::GetSlug($cat_slug);
    }

}

/*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

    