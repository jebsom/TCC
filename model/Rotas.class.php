<?php

/*
  Tratamento para URL's amigáveis.
 *  */

Class Rotas {

    public static $pag;
    private static $pasta_controller = 'controller';
    private static $pasta_view = 'view';
    private static $pasta_adm = 'adm';

    static function get_home() {
        return Config::SITE_URL . '/' . Config::SITE_PASTA;
    }

    static function get_raiz() {
        return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_PASTA;
    }

    static function get_template() {
        return self::get_home() . '/' . self::$pasta_view;
    }

    static function get_pagina() {
        if (isset($_GET['pag'])) {

            $pagina = $_GET['pag'];

            self::$pag = explode('/', $pagina);
//            echo '<pre>';
//            var_dump(self::$pag);

            $pagina = 'controller/' . self::$pag[0] . '.php';

            if (file_exists($pagina)) {
                include $pagina;
            } else {
                include 'erro.php';
            }
        } else {
            include 'home.php';
        }
    }

    static function pag_carrinho() {
        return self::get_home() . '/carrinho';
    }

    static function pag_carrinho_alterar() {
        return self::get_home() . '/carrinho_alterar';
    }

    static function pag_contato() {
        return self::get_home() . '/contato';
    }

    static function pag_conta() {
        return self::get_home() . '/conta';
    }

    static function pag_cliente_conta() {
        return self::get_home() . '/conta';
    }

    static function pag_cliente_cadastro() {
        return self::get_home() . '/cadastro';
    }

    static function pag_cliente_login() {
        return self::get_home() . '/login';
    }

    static function pag_recuperar_senha() {
        return self::get_home() . '/recuperar_senha';
    }

    static function pag_clientes_pedidos() {
        return self::get_home() . '/clientes_pedidos';
    }

    static function pag_clientes_itens() {
        return self::get_home() . '/clientes_itens';
    }

    static function pag_clientes_dados() {
        return self::get_home() . '/clientes_dados';
    }

    static function pag_clientes_senha() {
        return self::get_home() . '/clientes_senha';
    }

    static function pag_produtos() {
        return self::get_home() . '/produtos';
    }

    static function pag_produtoInfo() {
        return self::get_home() . '/produto_info';
    }

    static function pag_pedido_confirmar() {
        return self::get_home() . '/pedido_confirmar';
    }

    static function pag_pedido_finalizar() {
        return self::get_home() . '/pedido_finalizar';
    }

    static function pag_logoff() {
        return self::get_home() . '/logoff';
    }

    static function getPastaImagens() {
        return 'media/images/';
    }

    static function getImagemURL() {
        return self::get_home() . '/' . self::getPastaImagens();
    }

    static function imageLink($img, $largura, $altura) {
        $imagem = self::getImagemURL() . "thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";
        return $imagem;
    }

    static function getPastaController() {
        return self::$pasta_controller;
    }

    static function redirecionar($tempo, $pagina) {
        $url = '<meta http-equiv = "refresh" content = "' . $tempo . '; url=' . $pagina . '" >';
        echo $url;
    }

    static function get_home_adm() {
        return self::get_home() . '/' . self::$pasta_adm;
    }

    static function pag_clientes_adm() {
        return self::get_home_adm() . '/adm_clientes';
    }

    static function pag_clientesEdit_adm() {
        return self::get_home_adm() . '/adm_clientes_edit';
    }

    static function pag_pedidos_adm() {
        return self::get_home_adm() . '/adm_pedidos';
    }

    static function pag_categorias_adm() {
        return self::get_home_adm() . '/adm_categorias';
    }

    static function pag_itens_adm() {
        return self::get_home_adm() . '/adm_itens';
    }

    static function pag_produtos_adm() {
        return self::get_home_adm() . '/adm_produtos';
    }

    static function pag_produtosAdd_adm() {
        return self::get_home_adm() . '/adm_produtos_add';
    }

    static function pag_produtosEdit_adm() {
        return self::get_home_adm() . '/adm_produtos_edit';
    }

//    static function pag_produtosDel_adm() {
//        return self::get_home_adm() . '/adm_produtos_del';
//    }

    static function pag_produtosImg_adm() {
        return self::get_home_adm() . '/adm_produtos_img';
    }

    static function pag_logoff_adm() {
        return self::get_home_adm() . '/adm_logoff';
    }

}
