<?php

Class Paginacao extends Conex {

    public $limite, $inicio, $totalPags, $link = array();

    function getPaginacao($campo, $tabela) {
        $query = "SELECT $campo FROM $tabela";
        $this->ExecuteSql($query);
        $total = $this->TotalDados();

        $this->limite = Config::BD_LIMIT_PAG;
        $paginas = ceil($total / $this->limite);
        $this->totalPags = $paginas;

        $p = (int) isset($_GET['p']) ? $_GET['p'] : 1;

        if ($p > $paginas) {
            $p = $paginas;
        }

        $this->inicio = ($p * $this->limite) - $this->limite;
        $tolerancia = 5;
        $mostrar = $p + $tolerancia;


        if ($mostrar > $paginas) {
            $mostrar = $paginas;
        }

        for ($i = ($p - $tolerancia); $i <= $mostrar; $i++) {
            if ($i < 1) {
                $i = 1;
            }
            array_push($this->link, $i);
        }
    }

}

/*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

    