<?php

Class Conex extends Config {

    private $host, $user, $senha, $banco;
    protected $obj, $itens = array(), $prefix;
    public $paginacao_links, $totalPags, $limite, $inicio;

    function __construct() {
        $this->host = self::BD_HOST;
        $this->user = self::BD_USER;
        $this->senha = self::BD_SENHA;
        $this->banco = self::BD_BANCO;
        $this->prefix = self::BD_PREFIX;
        try {
            if ($this->Conectar() == null) {
                $this->Conectar();
            }
        } catch (Exception $e) {
            exit($e->getMessage() . '<h2> Erro na conexão com o banco de dados! </h2>');
        }
    }

    private function Conectar() {
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

        $conexao = new PDO("mysql:host={$this->host};dbname={$this->banco}",
                $this->user, $this->senha);
        return $conexao;
    }

    function ExecuteSQL($query, array $params = null) {
        $this->obj = $this->Conectar()->prepare($query);
        if ($params != null) {
            if (count($params) > 0) {
                foreach ($params as $key => $value) {
                    $this->obj->bindValue($key, $value);
                }
            }
        }
        return $this->obj->execute();
    }

    function Listar() {
        return $this->obj->fetch(PDO::FETCH_ASSOC);
    }

    function TotalDados() {
        return $this->obj->rowCount();
    }

    function getItens() {
        return $this->itens;
    }

    function paginacaoLinks($campo, $tabela) {
        $pag = new Paginacao();
        $pag->getPaginacao($campo, $tabela);
        $this->paginacao_links = $pag->link;

        $this->totalPags = $pag->totalPags;
        $this->limite = $pag->limite;
        $this->inicio = $pag->inicio;

        $inicio = $pag->inicio;
        $limite = $pag->limite;

        if ($this->totalPags > 0) {
            return " limit {$inicio},{$limite}";
        } else {
            return "";
        }
    }

    protected function paginacao($paginas = array()) {
        $pag = '<ul class="pagination">';
        $pag .= '<li><a href="?p=1"> << ... </a></li>';
        foreach ($paginas as $p) {
            $pag .= '<li><a href="?p=' . $p . '">' . $p . '</a></li>';
        }
        $pag .= '<li><a href="?p=' . $this->totalPags . '">  ... >> </a></li>';
        $pag .= '</ul>';
        if ($this->totalPags > 1) {

            return $pag;
        }
    }

    function mostrarPaginacao() {
        return $this->paginacao($this->paginacao_links);
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

