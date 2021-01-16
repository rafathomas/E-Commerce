<?php 

$smarty = new Template();

Login::MenuCliente();

foreach($_SESSION['CLI'] as $campo => $valor){
     	$smarty->assign(strtoupper($campo), $valor);
     }

     

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
     $cli_senha     = $_POST['cli_senha'];
     $cli_data_cad  = $_SESSION['CLI']['cli_data_cad'];
     $cli_hora_cad  = $_SESSION['CLI']['cli_hora_cad'];

     if($_SESSION['CLI']['cli_pass'] != md5($cli_senha)){
     	echo'<div class="alert alert-danger"> <p>A senha para confirmar a alteração está incorreta</p>';
     	Sistema::VoltarPagina();
     	echo '</div>';
     	exit();
     }



     $clientes = new Clientes();

     $clientes->Preparar($cli_nome, $cli_sobrenome, $cli_data_nasc, $cli_rg, $cli_cpf, $cli_ddd, $cli_fone, $cli_celular, $cli_endereco, $cli_numero, $cli_bairro, $cli_cidade, $cli_uf, $cli_cep, $cli_email, $cli_data_cad, $cli_hora_cad, $cli_senha);

     if(!$clientes->Editar($_SESSION['CLI']['cli_id'])){
     	echo '<div class="alert alert-danger">Ocorreu um erro ao editar os dados</div>';
     		exit();
     }else{
     	echo '<script> alert("Dados alterados com sucesso! Atualizando os dados do Login..."); </script>';
     	echo '<div class="alert alert-success">Dados atualizados com sucesso! Atualiando dados do login...'; 
     	echo '</div>';

     	$login = new Login();
     	$login->GetLogin($cli_email, $cli_senha);
     }

}
else{
	$smarty->display('clientes_dados.tpl');

}


 ?>