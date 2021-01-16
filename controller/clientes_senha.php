<?php
$smarty = new Template();

Login::MenuCliente();

if(isset($_POST['cli_senha_atual']) and isset($_POST['cli_senha'])){
    $senha_atual = md5($_POST['cli_senha_atual']);
    $senha_nova =  $_POST['cli_senha'];
    $email = $_SESSION['CLI']['cli_email'];

    if($senha_atual != $_SESSION['CLI']['cli_pass']){
        echo '<div class="alert alert-danger">Senha atual não confere.</div>';
        Rotas::Redirecionar(3, Rotas::pag_ClienteSenha());
        exit();
    }
    $clientes = new Clientes();
    $clientes->SenhaUpdate($senha_nova, $email);
    echo '<div class="alert alert-success">Senha alterada com sucesso. Faça login com a nova senha.</div>';
    Rotas::Redirecionar(2, Rotas::pag_Logoff());
}else{

    $smarty->display('clientes_senha.tpl');
}

?>