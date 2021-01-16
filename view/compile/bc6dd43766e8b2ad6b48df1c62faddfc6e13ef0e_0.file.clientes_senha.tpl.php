<?php
/* Smarty version 3.1.36, created on 2020-08-09 00:15:20
  from 'C:\wamp64\www\loja\view\clientes_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f2f4018917c23_80477256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc6dd43766e8b2ad6b48df1c62faddfc6e13ef0e' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\clientes_senha.tpl',
      1 => 1596932118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2f4018917c23_80477256 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="text-center">Alteração de senha de acesso</h3>


<form name="alterarsenha" method="post" action="">

    <section>
        <div class="col-md-4"></div>

        <div class="col-md-4">
            <label>Digite sua senha atual</label>

            <input type="password" name="cli_senha_atual" id="cli_senha_atual" class="form-control" required>

            <label>Digite sua nova senha</label>

            <input type="password" name="cli_senha" id="cli_senha" class="form-control" required>
            <br>

            <button type="submit" class="btn btn-success btn-block"> Alterar </button>
        </div>

        <div class="col-md-4">

        </div>

    </section>

</form><?php }
}
