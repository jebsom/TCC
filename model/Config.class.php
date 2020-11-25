<?php

Class Config {

//Informações básicas do site

    const SITE_URL = "http://localhost";
    const SITE_PASTA = "TCC";
    const SITE_NOME = "JVTecnologia";
    const SITE_EMAIL_ADM = "jvitorfm@rede.ulbra.br";
    const BD_LIMIT_PAG = 12;
    const SITE_CEP = '99700224';
//Informações para banco de dados

    const BD_HOST = "localhost",
            BD_USER = "root",
            BD_SENHA = "",
            BD_BANCO = "jvtbd",
            BD_PREFIX = "tcc_";
//Informações para o disparo de e-mails

    const EMAIL_HOST = "smtp.gmail.com";
    const EMAIL_USER = "jvitorfm@rede.ulbra.br";
    const EMAIL_NOME = "Contato JVTecnologia";
    const EMAIL_SENHA = "Jebo125478";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = "TLS";
    const EMAIL_COPIA = "jvitorfm@rede.ulbra.br ";
    //Constantes de PagSeguro
    const PS_EMAIL = "jvitorfm@rede.ulbra.br"; // email pagseguro
    const PS_TOKEN = ""; // token produção
    const PS_TOKEN_SBX = "88358C3E7AE1463DBE5B94752A7D9D75";  // token do sandbox
    const PS_AMBIENTE = "sandbox"; // production   /  sandbox

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

