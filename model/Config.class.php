<?php

Class Config{

// INFORMAÇÕES BÁSICAS DO SITE
    const SITE_URL = "http://localhost";
    const SITE_PASTA =  "loja";
    const SITE_NAME = "Loja Virtual";
    const SITE_EMAIL_ADM = "rafiinhathomas24@gmail.com";
    const BD_LIMIT_POR_PAG = 6;
    const SITE_CEP = '16072455';

// INFORMAÇÕES DO BANCO DE DADOS
    const BD_HOST = "localhost",
          BD_USER = "root",
          BD_SENHA = "",
          BD_BANCO = "lojavirtual",
          BD_PREFIX = "qc_";
          

// INFORMAÇÕES PARA PHPMAILER
    const EMAIL_HOST = "smtp.gmail.com";
    const EMAIL_USER = "rafiinhathomas24@gmail.com"; 
    const EMAIL_NOME = "Contato Loja Virtual";
    const EMAIL_SENHA = "360829251295";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = "tls";
    const EMAIL_COPIA = "rafiinhathomas24@gmail.com";


    //CONSTANTES PARA O PAGSEGURO
    const PS_EMAIL  = "contato.rafaelthomas@gmail.com"; // email pagseguro
    const PS_TOKEN  = "07ed5fcb-def1-4898-8729-c855884c1dcdcd3d53e04caeb8cb3f4ab4608c2c553d77cb-7b4e-4159-913b-0e662f2c5f4e"; // token produção
    const PS_TOKEN_SBX = "26E5DE3DB67A45F39C525D67D179E956";  // token do sandbox
    const PS_AMBIENTE = "production"; // production   /  sandbox

}


?>