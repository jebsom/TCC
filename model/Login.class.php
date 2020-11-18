<?php

Class Login extends Conex {

    private $user, $senha;

    public function __construct() {
        parent::__construct();
    }

    function getLogin($user, $senha) {
        $this->setUser($user);
        $this->setSenha($senha);

        $query = "SELECT * FROM {$this->prefix}clientes WHERE cli_email = :email AND cli_pwd = :senha";

        $params = array(
            ':email' => $this->getUser(),
            ':senha' => $this->getSenha()
        );

        $this->ExecuteSQL($query, $params);
        if ($this->TotalDados() > 0) {
            $lista = $this->Listar();

            $_SESSION['CLI']['cli_id'] = $lista['cli_id'];
            $_SESSION['CLI']['cli_nome'] = $lista['cli_nome'];
            $_SESSION['CLI']['cli_sobrenome'] = $lista['cli_sobrenome'];
            $_SESSION['CLI']['cli_endereco'] = $lista['cli_endereco'];
            $_SESSION['CLI']['cli_numero'] = $lista['cli_numero'];
            $_SESSION['CLI']['cli_bairro'] = $lista['cli_bairro'];
            $_SESSION['CLI']['cli_cidade'] = $lista['cli_cidade'];
            $_SESSION['CLI']['cli_uf'] = $lista['cli_uf'];
            $_SESSION['CLI']['cli_cpf'] = $lista['cli_cpf'];
            $_SESSION['CLI']['cli_cep'] = $lista['cli_cep'];
            $_SESSION['CLI']['cli_rg'] = $lista['cli_rg'];
            $_SESSION['CLI']['cli_ddd'] = $lista['cli_ddd'];
            $_SESSION['CLI']['cli_fone'] = $lista['cli_fone'];
            $_SESSION['CLI']['cli_email'] = $lista['cli_email'];
            $_SESSION['CLI']['cli_celular'] = $lista['cli_celular'];
            $_SESSION['CLI']['cli_data_nasc'] = $lista['cli_data_nasc'];
            $_SESSION['CLI']['cli_hora_cad'] = $lista['cli_hora_cad'];
            $_SESSION['CLI']['cli_data_cad'] = $lista['cli_data_cad'];
            $_SESSION['CLI']['cli_pwd'] = $lista['cli_pwd'];

            Rotas::redirecionar(0, Rotas::pag_cliente_login());
//            echo "login ok.";
//            <pre>";
//            var_dump($_SESSION['CLI']);
//            echo "</pre>";
        } else {
//            echo "login not ok.";
            echo '<script> alert ("E-mail ou senha incorreta! ");</script>';
        }
    }

    static function logado() {
        if (isset($_SESSION['CLI']['cli_email']) && isset($_SESSION['CLI']['cli_id'])) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    static function logoff() {
        unset($_SESSION['CLI']);
        echo '<h4 class="alert alert-danger">Encerrando a sessão...</h4>';
        Rotas::redirecionar(2, Rotas::pag_cliente_login());
    }

    static function acessoNegado() {
        echo '<div class="alert alert-warning">Você não está logado! '
        . 'Redirecionando para página de login!'
        . 'Se nada acontecer, clique aqui para realizar o <a class="btn btn-info" href="' . Rotas::pag_cliente_login() . '">Login</a> </div>';
    }

    static function clienteMenu() {
        if (!self::logado()) {

            self::acessoNegado();
            Rotas::redirecionar(3, Rotas::pag_cliente_login());
            exit();
        } else {

            $smarty = new Template();
            $smarty->assign('PAG_CONTA', Rotas::pag_cliente_conta());
            $smarty->assign('PAG_CARRINHO', Rotas::pag_carrinho());
            $smarty->assign('PAG_LOGOFF', Rotas::pag_logoff());
            $smarty->assign('PAG_CLIENTES_PEDIDOS', Rotas::pag_clientes_pedidos());
            $smarty->assign('PAG_CLIENTES_DADOS', Rotas::pag_clientes_dados());
            $smarty->assign('PAG_CLIENTES_SENHA', Rotas::pag_clientes_senha());
            $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
            $smarty->display('menu_cliente.tpl');
        }
    }

    private function setUser($user) {
        $this->user = $user;
    }

    private function setSenha($senha) {
        $this->senha = md5($senha);
    }

    function getUser() {
        return $this->user;
    }

    function getSenha() {
        return $this->senha;
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

