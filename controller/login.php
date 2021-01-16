<?php

$smarty = new Template();
$login = new Login();

if (isset($_POST['txt_email']) && isset($_POST['txt_senha'])) {
    $user = $_POST['txt_email'];
    $senha = $_POST['txt_senha'];
    $login->GetLogin($user, $senha);
}
$smarty->assign('USER', '');
if (Login::Logado()) {
    $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
    $smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());

    Login::MenuCliente();
}
$smarty->assign('LOGADO', Login::Logado());
$smarty->assign('PAG_CADASTRO', Rotas::pag_ClienteCadastro());
$smarty->assign('PAG_RECOVERY', Rotas::pag_ClienteRecovery());
$smarty->display('login.tpl');
?>