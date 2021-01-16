<?php 

$smarty = new Template();


if(isset($_POST['cli_nome']) and isset($_POST['cli_email']) and isset($_POST['cli_cpf'])){
	//variaveis
	 $cli_nome = $_POST['cli_nome'];
	 $cli_sobrenome = $_POST['cli_sobrenome'];
     $cli_data_nasc = $_POST['cli_data_nasc'];
     $cli_rg        = $_POST['cli_rg'];
     $cli_cpf       = $_POST['cli_cpf'];
     $cli_ddd       = $_POST['cli_ddd'];
     $cli_fone      = $_POST['cli_fone'];
     $cli_celular   = $_POST['cli_celular'];
     $cli_endereco  = $_POST['cli_endereco'];
     $cli_numero    = $_POST['cli_numero'];
     $cli_bairro    = $_POST['cli_bairro'];
     $cli_cidade    = $_POST['cli_cidade'];
     $cli_uf        = $_POST['cli_uf'];
     $cli_cep       = $_POST['cli_cep'];
     $cli_email     = $_POST['cli_email'];
     $cli_senha     = Sistema::GerarSenha();
     $cli_data_cad  = Sistema::DataAtualUS();
     $cli_hora_cad  = Sistema::HoraAtual();


     $clientes = new Clientes();

     $clientes->Preparar($cli_nome, $cli_sobrenome, $cli_data_nasc, $cli_rg, $cli_cpf, $cli_ddd, $cli_fone, $cli_celular, $cli_endereco, $cli_numero, $cli_bairro, $cli_cidade, $cli_uf, $cli_cep, $cli_email, $cli_data_cad, $cli_hora_cad, $cli_senha);


     $clientes->Inserir();

     //ASSIGNS PARA TEMPLATE
     $smarty->assign('NOME', $cli_nome);
     $smarty->assign('SITE', Config::SITE_NAME);
     $smarty->assign('EMAIL', $cli_email);
     $smarty->assign('SENHA', $cli_senha);
     $smarty->assign('PAG_MINHA_CONTA', Rotas::pag_ClienteConta());
     $smarty->assign('SITE_HOME', Rotas::get_SiteHOME());


     $email = new EnviarEmail();
     $assunto = 'Cadastro Efetuado - '. Config::SITE_NAME;
     $msg = $smarty->fetch('email_cliente_cadastro.tpl');
     $destinatario = array($cli_email, Config::SITE_EMAIL_ADM);
     $email->Enviar($assunto, $msg, $destinatario);

     echo '<div class="alert alert-success">Cadastro Efetuado - Senha de acesso enviada no e-mail cadastrado.<br>'.'Acesse seu e-mail e confira</div>';
     Rotas::Redirecionar(5, Rotas::pag_ClienteLogin());
} else {

    $smarty->display('cadastro.tpl');
}
?>