<?php

class Itens extends Conex {

    private $totalValor;

    public function __construct() {
        parent::__construct();
    }

    function getItensPedido($pedido, $cliente = null) {
        $query = "SELECT * FROM {$this->prefix}pedidos p, {$this->prefix}pedidos_itens i, {$this->prefix}produtos d";
        $query .= " WHERE p.ped_cod = i.item_ped_cod AND i.item_produto = d.prod_id";
        $query .= " AND p.ped_cod = :pedido";

        if ($cliente != null) {
            $query .= " AND p.ped_cliente = :cliente";
            $params[':cliente'] = (int) $cliente;
        }
        $params[':pedido'] = $pedido;
        $this->ExecuteSQL($query, $params);
        $this->getListaItens();
    }

    function getListaItens() {

        $i = 1;

        while ($lista = $this->Listar()) {
            $sub = $lista['item_valor'] * $lista['item_qtd'];

            $this->totalValor += $sub;

            $this->itens[$i] = array(
                'ped_id' => $lista['ped_id'],
                'ped_data' => Sistema::Fdata($lista['ped_data']),
                'ped_data_us' => $lista['ped_data'],
                'ped_hora' => $lista['ped_hora'],
                'ped_cliente' => $lista['ped_cliente'],
                'ped_cod' => $lista['ped_cod'],
                'ped_refer' => $lista['ped_refer'],
                'ped_pgto_status' => $lista['ped_pgto_status'],
                'ped_pgto_forma' => $lista['ped_pgto_forma'],
                'ped_pgto_tipo' => $lista['ped_pgto_tipo'],
                'ped_pgto_cod' => $lista['ped_pgto_cod'],
                'ped_frete_valor' => $lista['ped_frete_valor'],
                'ped_frete_tipo' => $lista['ped_frete_tipo'],
                'item_id' => $lista['item_id'],
                'item_nome' => $lista['prod_nome'],
                'item_valor' => Sistema::MoedaBR($lista['item_valor']),
                'item_valor_us' => $lista['item_valor'],
                'item_qtd' => $lista['item_qtd'],
                'item_img' => Rotas::ImageLink($lista['prod_img'], 60, 60),
                'item_sub' => Sistema::MoedaBR($sub),
                'item_sub_us' => $sub,
            );
            $i++;
        }
    }

    function getValorTotal() {
        return $this->totalValor;
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

