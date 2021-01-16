<?php
$smarty = new Template();

$cliente = new Clientes();

if(isset($_POST['cli_email'])){
    $cliente->setCli_email($_POST['cli_email']);

    if($cliente->GetClienteEmail($cliente->getCli_email()) > 0 ){
        $novasenha = Sistema::GerarSenha();
        $cliente->SenhaUpdate($novasenha, $cliente->getCli_email());

        //ENVIAR EMAIL COM A NOVA SENHA
        $email = new EnviarEmail();
        $assunto = 'Nova Senha - '. Config::SITE_NAME;
        $msg = "Olá cliente, uma nova senha foi solicitada por você, acesse o site: " . Config::SITE_NAME;
        $msg .= "<br> Nova senha: " . $novasenha;
        $destinatario = array($cliente->getCli_email(), Config::SITE_EMAIL_ADM);
        $email->Enviar($assunto, $msg, $destinatario);

        echo '<div class="alert alert-success"><p>Olá, foi enviada uma nova senha para o acesso do site, verifique seu e-mail de cadastro</p></div>';
        Rotas::Redirecionar(5, Rotas::pag_ClienteLogin());
    }else{
        echo '<div class="alert alert-danger"><p>E-mail informado não existe</p></div>';
        Rotas::Redirecionar(2, Rotas::pag_ClienteRecovery());
    }
}else{
    $smarty->display('cliente_recovery.tpl');

}


?>