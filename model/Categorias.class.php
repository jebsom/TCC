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

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

