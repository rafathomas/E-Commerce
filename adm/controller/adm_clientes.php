<?php

$smarty = new Template();
$cliente = new Clientes();
$cliente->GetClientes();

$smarty->assign('CLIENTES', $cliente->GetItens());
$smarty->assign('PAG_EDITAR', Rotas::pag_ClientesEditarADM());
$smarty->assign('PAG_PEDIDOS', Rotas::pag_PedidosADM());

$smarty->display('adm_clientes.tpl');
?>