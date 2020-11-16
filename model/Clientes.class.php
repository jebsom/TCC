<?php

Class Clientes extends Conex {

    private $nome, $sobrenome, $data_nasc, $rg, $cpf, $ddd, $fone, $celular, $endereco, $numero, $bairro, $cidade, $uf, $cep, $email, $senha, $data_cad, $hora_cad;

    public function __construct() {
        parent::__construct();
    }

    function preparaCliente($nome, $sobrenome, $data_nasc, $rg, $cpf, $ddd, $fone, $celular, $endereco, $numero, $bairro, $cidade, $uf, $cep, $email, $senha, $data_cad, $hora_cad) {
        $this->setNome($nome);
        $this->setSobrenome($sobrenome);
        $this->setData_nasc($data_nasc);
        $this->setRg($rg);
        $this->setCpf($cpf);
        $this->setDdd($ddd);
        $this->setFone($fone);
        $this->setCelular($celular);
        $this->setEndereco($endereco);
        $this->setNumero($numero);
        $this->setBairro($bairro);
        $this->setCidade($cidade);
        $this->setUf($uf);
        $this->setCep($cep);
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setData_cad($data_cad);
        $this->setHora_cad($hora_cad);
    }

    function insereCliente() {
        if ($this->getClienteCPF($this->getCpf()) > 0) {
            echo '<div class="alert alert-danger" id="erro_mostrar">Este CPF já está cadastrado</div>';
        }
        if ($this->getClienteEmail($this->getCpf()) > 0) {
            echo '<div class="alert alert-danger" id="erro_mostrar">Este CPF já está cadastrado</div>';
        }
        $query = "INSERT INTO "
                . "{$this->prefix}clientes "
                . "(cli_nome, cli_sobrenome, cli_endereco, cli_numero, cli_bairro, cli_cidade,"
                . " cli_uf, cli_cep, cli_cpf, cli_rg, cli_ddd, cli_fone, cli_celular, cli_email,"
                . " cli_pwd, cli_data_nasc, cli_data_cad, cli_hora_cad)"
                . "VALUES"
                . "(:nome, :sobrenome, :endereco, :numero, :bairro, :cidade,"
                . " :uf, :cep, :cpf, :rg, :ddd, :fone, :celular, :email,"
                . " :senha, :data_nasc, :data_cad, :hora_cad)";

        $params = array(
            ':nome' => $this->getNome(),
            ':sobrenome' => $this->getNome(),
            ':endereco' => $this->getSobrenome(),
            ':numero' => $this->getNumero(),
            ':bairro' => $this->getBairro(),
            ':cidade' => $this->getCidade(),
            ':uf' => $this->getUf(),
            ':cep' => $this->getCep(),
            ':cpf' => $this->getCpf(),
            ':rg' => $this->getRg(),
            ':ddd' => $this->getDdd(),
            ':fone' => $this->getFone(),
            ':celular' => $this->getCelular(),
            ':email' => $this->getEmail(),
            ':senha' => $this->getSenha(),
            ':data_nasc' => $this->getData_nasc(),
            ':data_cad' => $this->getData_cad(),
            ':hora_cad' => $this->getHora_cad()
        );
//        echo $query;
        echo $this->ExecuteSQL($query, $params);
    }

    function getClienteCPF($cpf) {
        $query = "SELECT * FROM  {$this->prefix}clientes WHERE cli_cpf = :cpf ";

        $params = array(':cpf' => $cpf);
        $this->ExecuteSQL($query, $params);
        return $this->TotalDados();
    }

    function getClienteEmail($email) {
        $query = "SELECT * FROM  {$this->prefix}clientes WHERE cli_email = :email";

        $params = array(':email' => $email);
        $this->ExecuteSQL($query, $params);
        return $this->TotalDados();
    }

    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getData_nasc() {
        return $this->data_nasc;
    }

    function getRg() {
        return $this->rg;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getDdd() {
        return $this->ddd;
    }

    function getFone() {
        return $this->fone;
    }

    function getCelular() {
        return $this->celular;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getNumero() {
        return $this->numero;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getUf() {
        return $this->uf;
    }

    function getCep() {
        return $this->cep;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function getData_cad() {
        return $this->data_cad;
    }

    function getHora_cad() {
        return $this->hora_cad;
    }

    function setNome($nome) {
        if (strlen($nome) < 3) {
            echo '<div class="alert alert-danger" id="erro_mostrar">Digite seu nome';
            Sistema::VoltarPagina();
            echo'</div>';
        } else {
            $this->nome = $nome;
        }
    }

    function setSobrenome($sobrenome) {
        if (strlen($sobrenome) < 3) {
            echo '<div class="alert alert-danger" id="erro_mostrar">Digite seu sobrenome';
            Sistema::VoltarPagina();
            echo'</div>';
        } else {
            $this->sobrenome = $sobrenome;
        }
    }

    function setData_nasc($data_nasc) {
        $this->data_nasc = $data_nasc;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setDdd($ddd) {
        $cli_ddd = filter_var($ddd, FILTER_SANITIZE_NUMBER_INT);
        if (strlen($cli_ddd) != 2) {
            echo '<div class="alert alert-danger" id="erro_mostrar">DDD Incorreto.';
            Sistema::VoltarPagina();
            echo '</div>';
        } else {
            $this->ddd = $ddd;
        }
    }

    function setFone($fone) {
        $this->fone = $fone;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setUf($uf) {
        $cli_uf = filter_var($uf, FILTER_SANITIZE_STRING);
        if (strlen($cli_uf) != 2) {
            echo '<div class="alert alert-danger" id="erro_mostrar">UF Incorreto.';
            Sistema::VoltarPagina();
            echo '</div>';
        } else {
            $this->uf = $uf;
        }
    }

    function setCep($cep) {
        $cli_cep = filter_var($cep, FILTER_SANITIZE_NUMBER_INT);
        if (strlen($cli_cep) != 8) {
            echo '<div class="alert alert-danger" id="erro_mostrar">CEP Incorreto, digite apenas números.';
            Sistema::VoltarPagina();
            echo '</div>';
        } else {
            $this->cep = $cep;
        }
    }

    function setEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<div class="alert alert-danger" id="erro_mostrar">Verifique o e-mail digitado e tente novamente.';
            Sistema::VoltarPagina();
            echo '</div>';
        } else {
            $this->email = $email;
        }
    }

    function setSenha($senha) {
        $this->senha = Sistema::Criptografia($senha);
        //Criptografia MD5
    }

    function setData_cad($data_cad) {
        $this->data_cad = $data_cad;
    }

    function setHora_cad($hora_cad) {
        $this->hora_cad = $hora_cad;
    }

}
