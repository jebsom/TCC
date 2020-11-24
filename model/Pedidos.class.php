<?php

Class Pedidos extends Conex {

    function __construct() {
        parent::__construct();
    }

    function pedidoGravar($cliente, $cod, $refer, $freteValor = null, $freteTipo = null) {

        $retorno = false;
        $query = "INSERT INTO " . $this->prefix . "pedidos ";
        $query .= " (ped_data, ped_hora, ped_cliente, ped_cod, ped_refer, ped_frete_valor, ped_frete_tipo)";
        $query .= " VALUES ";
        $query .= "  (:data, :hora, :cliente, :cod, :refer, :frete_valor, :frete_tipo)";

        $params = array(
            ':data' => Sistema::DataAtualUS(),
            ':hora' => Sistema::HoraAtual(),
            ':cliente' => (int) $cliente,
            ':cod' => $cod,
            ':refer' => $refer,
            ':frete_valor' => $freteValor,
            ':frete_tipo' => $freteTipo
        );

        $this->ExecuteSQL($query, $params);
//        echo $query;
        $this->itensGravar($cod);
        $retorno = true;
        return $retorno;
    }

    function itensGravar($codPedido) {
        $carrinho = new Carrinho();
        foreach ($carrinho->getCarrinho() as $item) {
            $query = "INSERT INTO " . $this->prefix . "pedidos_itens ";
            $query .= "(item_produto, item_valor, item_qtd, item_ped_cod)";
            $query .= "VALUES  (:produto,:valor,:qtd,:cod)";

            $params = array(
                ':produto' => $item['prod_id'],
                ':valor' => (double) $item['prod_valor_us'],
                ':qtd' => (int) $item['prod_qtd'],
                ':cod' => $codPedido
            );
            $this->ExecuteSQL($query, $params);
//            echo $query;
//            echo "<pre>";
//            var_dump($params);
//            echo "</pre>";
        }
    }

    function getPedidosCliente($cliente = null) {
        $query = "SELECT * FROM {$this->prefix}pedidos p INNER JOIN {$this->prefix}clientes c";
        $query .= " ON p.ped_cliente = c.cli_id";
        if ($cliente != null) {
            $cli = (int) $cliente;
            $query .= " WHERE p.ped_cliente = {$cli}";
            $query .= " ORDER BY p.ped_id";
            $query .= $this->paginacaoLinks("ped_id", $this->prefix . "pedidos WHERE ped_cliente=" . (int) $cli);
        } else {
            $query .= $this->paginacaoLinks("ped_id", $this->prefix . "pedidos");
        }
        $this->ExecuteSQL($query);
        $this->getListaPedidos();
//        echo "<pre>";
//        echo $query;
//        var_dump($this->getListaPedidos());
//        echo "</pre>";
    }

    function getPedidosRefer($refer) {

        $query = "SELECT * FROM {$this->prefix}pedidos p INNER JOIN {$this->prefix}clientes c";
        $query .= " ON p.ped_cliente = c.cli_id";
        $query .= " WHERE ped_refer = :refer";
        $query .= $this->paginacaoLinks("ped_id", $this->prefix . "pedidos WHERE ped_refer =  $refer");

        $params = array(':refer' => $refer);

        $this->ExecuteSQL($query, $params);
        $this->getListaPedidos();
    }

    function getPedidosData($data_ini, $data_fim) {

        $query = "SELECT * FROM {$this->prefix}pedidos p INNER JOIN {$this->prefix}clientes c";
        $query .= " ON p.ped_cliente = c.cli_id";
        $query .= " WHERE ped_data between :data_ini AND :data_fim";
        $query .= $this->paginacaoLinks("ped_id", $this->prefix . "pedidos WHERE ped_data between $data_ini AND $data_fim");

        $params = array(':data_ini' => $data_ini, ':data_fim' => $data_fim);

        $this->ExecuteSQL($query, $params);
        $this->getListaPedidos();
    }

    private function getListaPedidos() {

        $i = 1;
        while ($lista = $this->Listar()) {

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
                'cli_nome' => $lista['cli_nome'],
                'cli_sobrenome' => $lista['cli_sobrenome'],
            );
            $i++;
        }
    }

    function deletarPedido($ped_cod) {

        $query = " DELETE FROM {$this->prefix}pedidos WHERE ped_cod = :ped_cod";
        $params = array(':ped_cod' => $ped_cod);
        $this->ExecuteSQL($query, $params);

        $query_2 = " DELETE FROM {$this->prefix}pedidos_itens WHERE item_ped_cod = :ped_cod";
        $params_2 = array(':ped_cod' => $ped_cod);
        if ($this->ExecuteSQL($query_2, $params_2)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function limparSessao() {
        unset($_SESSION['PRODS']);
        unset($_SESSION['PED']['pedido']);
    }

}
