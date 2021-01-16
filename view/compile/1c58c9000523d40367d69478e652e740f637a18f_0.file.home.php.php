<?php
/* Smarty version 3.1.36, created on 2020-07-31 19:58:21
  from 'C:\wamp64\www\loja\home.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f2477dd1f1876_84146185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c58c9000523d40367d69478e652e740f637a18f' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\home.php',
      1 => 1596225491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2477dd1f1876_84146185 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php

';?>
$smarty = new Template();
$smarty->display('home.php');

include_once Rotas::get_Pasta_Controller() . '/produtos.php';

<?php echo '?>';
}
}
