<?php
/* Smarty version 3.1.36, created on 2020-08-09 02:07:44
  from 'C:\wamp64\www\loja\view\clientes_dados.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f2f5a709c0616_55072461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd071525e09fae72ae5ed690ec62d2efed8192d1d' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\clientes_dados.tpl',
      1 => 1596938863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2f5a709c0616_55072461 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Meus Dados</h3>

<hr>




<form name="cadcliente" id="cadcliente" method="post" action="">

    <section class="row" id="cadastro">



        <div class="col-md-4">
            <label>Nome:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NOME']->value;?>
" name="cli_nome" class="form-control" minlength="3" required>


        </div>

        <div class="col-md-4">
            <label>Sobrenome:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_SOBRENOME']->value;?>
" name="cli_sobrenome" class="form-control" minlength="3" required>


        </div>


        <div class="col-md-3">
            <label>Data Nasc:</label>
            <input type="date" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DATA_NASC']->value;?>
" name="cli_data_nasc" class="form-control" required>


        </div>


        <div class="col-md-2">
            <label>RG:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_RG']->value;?>
" name="cli_rg" class="form-control"  required readonly>


        </div>



        <div class="col-md-2">
            <label>CPF:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CPF']->value;?>
" name="cli_cpf" class="form-control" minlength="11" maxlength="11" required readonly>


        </div>



        <div class="col-md-2">
            <label>DDD:</label>
            <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DDD']->value;?>
" name="cli_ddd" class="form-control" min="10" max="99" required>


        </div>



        <div class="col-md-3">
            <label>Fone:</label>
            <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_FONE']->value;?>
" name="cli_fone" class="form-control" minlength="8" maxlength="8" required>


        </div>



        <div class="col-md-3">
            <label>Celular:</label>
            <input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CELULAR']->value;?>
" name="cli_celular" minlength="9" maxlength="9" class="form-control" required>


        </div>



        <div class="col-md-6">
            <label>Endereço:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_ENDERECO']->value;?>
" name="cli_endereco" class="form-control" minlength="3" required>


        </div>



        <div class="col-md-2">
            <label>Numero:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NUMERO']->value;?>
" name="cli_numero" class="form-control" required>


        </div>


        <div class="col-md-4">
            <label>Bairro:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_BAIRRO']->value;?>
" name="cli_bairro" class="form-control" minlength="3" required>


        </div>


        <div class="col-md-4">
            <label>Cidade:</label>
            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CIDADE']->value;?>
" name="cli_cidade" class="form-control" minlength="3" required>


        </div>


        <div class="col-md-2">
            <label>UF:</label>

            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_UF']->value;?>
" name="cli_uf" class="form-control" maxlength="2" minlength="2" required>


        </div>


        <div class="col-md-2">
            <label>Cep:</label>

            <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CEP']->value;?>
" name="cli_cep" class="form-control" minlength="8" maxlength="8" required>


        </div>


        <div class="col-md-4">
            <label>Email:</label>

            <input type="email" value="<?php echo $_smarty_tpl->tpl_vars['CLI_EMAIL']->value;?>
" name="cli_email" class="form-control" required>


        </div>




    </section>

    <br>
    <br>

    <section class="row" id="btngravar">

        <div class="col-md-4"></div>

        <div class="col-md-4">
            <label>Digite sua senha atual por segurança<br>(<small>sua senha não será alterada</small>)</label>
            <input type="password" name="cli_senha" id="cli_senha" class="form-control" required>
            <br>
            <button type="submit" class="btn btn-success btn-block "> <i class="glyphicon glyphicon-ok"></i> Gravar </button>


        </div>

        <div class="col-md-4"></div>


    </section>


</form>



<br>
<br>
<br>
<br><?php }
}
