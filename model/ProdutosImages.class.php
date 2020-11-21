<?php

Class ProdutosImages extends Conex {

    function getImagesProd($prodID) {
        $query = "SELECT * FROM {$this->prefix}imagens WHERE img_prod_id = :prodID";

        $params = array(':prodID' => (int) $prodID);
        $this->ExecuteSQL($query, $params);
        $this->getLista();
    }

    private function getLista() {
        $i = 1;
        while ($listar = $this->Listar()) {
            $this->itens[$i] = array(
                'img_id' => $listar['img_id'],
                'img_nome' => Rotas::imageLink($listar['img_nome'], 150, 150),
                'img_prod_id' => $listar['img_prod_id'],
                'img_pasta' => $listar['img_pasta'],
                'img_link' => Rotas::imageLink($listar['img_nome'], 500, 500),
                'img_arquivo' => $listar['img_nome']
            );
            $i++;
        }
    }

    public function insereImages($img, $produto) {

        $query = "INSERT INTO {$this->prefix}imagens (img_nome,img_prod_id)";
        $query .= " VALUES (:img_nome,:img_prod_id) ";

        $params = array(':img_nome' => $img, ':img_prod_id' => (int) $produto);

        $this->ExecuteSQL($query, $params);
    }

    public function deletarImagens($img_nome) {


        $query = " DELETE FROM {$this->prefix}imagens ";
        $query .= " WHERE img_nome = :img_nome ";

        $params = array(':img_nome' => $img_nome);

        $this->ExecuteSQL($query, $params);
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

