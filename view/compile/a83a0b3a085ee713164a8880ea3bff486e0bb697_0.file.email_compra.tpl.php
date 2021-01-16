<?php
/* Smarty version 3.1.36, created on 2020-08-12 17:57:21
  from 'C:\wamp64\www\loja\view\email_compra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f3457b17acaf3_78684104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a83a0b3a085ee713164a8880ea3bff486e0bb697' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\email_compra.tpl',
      1 => 1596825290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3457b17acaf3_78684104 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    .tabela {
        border-collapse: collapse;
        width: 100%;
    }

    .tabela th,
    td {
        text-align: left;
        padding: 8px;
    }

    .tabela tr:nth-child(odd) {
        background-color: #b2b2b2;
    }

 
</style>

<center>  <p class="textoinicio"> Olá <?php echo $_smarty_tpl->tpl_vars['NOME_CLIENTE']->value;?>
 , obrigado pela sua compra em <?php echo $_smarty_tpl->tpl_vars['SITE_NOME']->value;?>
 <br>
    <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
 </a>
</p></center>


<center><section class="row">
    <p class="minhaconta">
        Para acessar a sua conta e ter um histórico de seus pedidos acesse nosso site, e sua conta<br>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
"> Minha conta: <?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
 </a>

    </p>

</section></center>


<section class="row ">

    <center>


        <br>

        <table class="tabela" style="width: 95%;">

            <tr style="
            border: 1px solid #b2dba1; 
            
            background-color: #072339;
            color:#FFF;
            font-size:18px;">

                <td colspan="5">Itens do seu pedido </td>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
    
                <tr style="border: 1px solid #b2dba1">
    
                    <td> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt=" <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 "> </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
 </td>
    
    
    
                </tr>
    
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </table>

    </center>


</section><!-- fim da listagem itens -->


<!-- botoes de baixo e valor total -->
<div class="sessao" style="text-align:right">

    <p class="total">
        <b>Total :</b> R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

    </p>
    <p class="frete">
        <b>Frete</b> : R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>

    </p>
    <p class="totalfrete" style=" color:#062a46; font-size:18px;">
        <b>Final : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>
</b>
    </p>

</div>
<br><?php }
}
