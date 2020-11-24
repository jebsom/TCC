<?php

class Usuario extends Conex {

    private $user, $senha, $email;

    function __construct() {
        parent::__construct();
    }

    function getUserEmail($email) {

        $this->setEmail($email);

        $query = " SELECT * FROM {$this->prefix}user WHERE user_email = :email ";

        $params = array(':email' => $this->getEmail());

        $this->ExecuteSQL($query, $params);

        return $this->TotalDados();
    }

    function alterarSenha($senha, $email) {

        $this->setSenha($senha);
        $this->setEmail($email);

        $query = "UPDATE {$this->prefix}user SET user_pwd = :senha";
        $query .= " WHERE user_email = :email";

        $params = array(':senha' => $this->getSenha(), ':email' => $this->getEmail());

        if ($this->ExecuteSQL($query, $params)) {

            return TRUE;
        } else {
            return FALSE;
        }
    }

    function getUser() {
        return $this->user;
    }

    function getSenha() {
        return $this->senha;
    }

    function getEmail() {
        return $this->email;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setSenha($senha) {
        $this->senha = md5($senha);
    }

    function setEmail($email) {
        $this->email = $email;
    }

}
