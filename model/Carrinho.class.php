<?php

class Carrinho {

    private $valorTotal, $pesoTotal, $itens = array();

    function getCarrinho($sessao = NULL) {
        $i = 1;
        $sub = 1.00;
        foreach ($_SESSION['PRODS']as $lista) {
            $sub = ($lista['VALOR'] * $lista['QTD']);
            $this->valorTotal += $sub;

            $peso = $lista['PESO'] * $lista['QTD'];
            $this->pesoTotal += $peso;

            $this->itens[$i] = array(
                'prod_id' => $lista['ID'],
                'prod_nome' => $lista['NOME'],
                'prod_valor' => ($lista['VALOR']), // 1.000,99
                'prod_valor_us' => $lista['VALOR'], // 1.000,99
                'prod_peso' => $lista['PESO'],
                'prod_qtd' => $lista['QTD'],
                'prod_img' => $lista['IMG'],
                'prod_link' => $lista['LINK'],
                'prod_subTotal_us' => $sub,
                'prod_subTotal' => Sistema::MoedaBR($sub)
            );

            $i++;
        }
        if (count($this->itens) > 0) {
            return $this->itens;
        } else {
            echo '<h4 class="alert alert-danger">Não há produto no carrinho</h4>';
        }
    }

    function getTotal() {
        return $this->valorTotal;
    }

    function getPeso() {
        return $this->pesoTotal;
    }

    function addCarrinho($id) {
        $produtos = new Produtos();
        $produtos->getProdutosID($id);
        foreach ($produtos->getItens() as $prod) {
            $ID = $prod['prod_id'];
            $NOME = $prod['prod_nome'];
            $VALOR_US = $prod['prod_valor_us'];
            $VALOR = $prod['prod_valor'];
            $PESO = $prod['prod_peso'];
            $QTD = 1;
            $IMG = $prod['prod_img_p'];
            $LINK = Rotas::pag_produtoInfo() . '/' . $id . '/' . $prod['prod_slug'];
            $ACAO = $_POST['acao'];
        }
        switch ($ACAO) {
            case 'add':
                if (!isset($_SESSION['PRODS'][$ID]['ID'])) {
                    $_SESSION['PRODS'][$ID]['ID'] = $ID;
                    $_SESSION['PRODS'][$ID]['NOME'] = $NOME;
                    $_SESSION['PRODS'][$ID]['VALOR'] = $VALOR;
                    $_SESSION['PRODS'][$ID]['VALOR_US'] = $VALOR_US;
                    $_SESSION['PRODS'][$ID]['PESO'] = $PESO;
                    $_SESSION['PRODS'][$ID]['QTD'] = $QTD;
                    $_SESSION['PRODS'][$ID]['IMG'] = $IMG;
                    $_SESSION['PRODS'][$ID]['LINK'] = $LINK;
                } else {
                    $_SESSION['PRODS'][$ID]['QTD'] += $QTD;
                }
                echo '<h4 class="alert alert-success">Produto inserido com sucesso.</h4>';
                break;
            case 'del':
                $this->carrinhoDel($id);
                echo '<h4 class="alert alert-warning">Produto removido.</h4>';
                break;
            case 'limpar':
                $this->carrinhoLimpar();
                echo '<h4 class="alert alert-danger">Produtos removidos.</h4>';
                break;

            default:
                break;
        }
    }

    private function carrinhoDel($id) {
        unset($_SESSION['PRODS'][$id]);
    }

    private function carrinhoLimpar() {
        unset($_SESSION['PRODS']);
    }

}
