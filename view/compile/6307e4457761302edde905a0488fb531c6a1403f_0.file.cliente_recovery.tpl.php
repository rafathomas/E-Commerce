<?php
/* Smarty version 3.1.36, created on 2020-08-08 19:18:02
  from 'C:\wamp64\www\loja\view\cliente_recovery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f2efa6ac17f21_65464880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6307e4457761302edde905a0488fb531c6a1403f' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\cliente_recovery.tpl',
      1 => 1596914281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2efa6ac17f21_65464880 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center">Digite seu email cadastrado para receber uma nova senha </h4>
<hr>

<form name="recuperarsenha" method="post" action="">

    <section>
        <div class="col-md-4"></div>

        <div class="col-md-4">
            <label>Digite seu email cadastrado</label>

            <input type="email" name="cli_email" id="cli_email" class="form-control" required>
            <br>
            <button type="submit" class="btn btn-warning btn-block"> Recuperar </button>
        </div>

        <div class="col-md-4">



        </div>



    </section>



</form><?php }
}
