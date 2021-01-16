<?php
/* Smarty version 3.1.36, created on 2020-08-06 21:05:30
  from 'C:\wamp64\www\loja\view\pedido_confirmar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f2c709ac434a6_42501499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7cf3fc0958d8b252c2bd5cae70893bba4254682' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\pedido_confirmar.tpl',
      1 => 1596747928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2c709ac434a6_42501499 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Confirmar Pedido</h3>
<hr>
<!-- botoes e opções de cima -->
<section class="row">

    <div class="col-md-4 ">
        
    </div>
    <div class="col-md-4">

    </div>
    <div class="col-md-4 text-right">

    </div>

</section>
<br>

<!--  table listagem de itens -->
<section class="row ">

    <center>
        <table class="table table-bordered" style="width: 95%">
                <tr>
                
                <td colspan="6" align="right"><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="btn btn-info" title="">Voltar para o carrinho</a></td>
                
                </tr> 
            <tr class="text-danger bg-danger">
                <td></td>
                <td>Produto</td>
                <td>Valor R$</td>
                <td>X</td>
                <td>Sub Total R$</td>
           

            </tr>


        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
            
      

            <tr>

                <td> <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
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
<section class="row" id="total">

    <div class="col-md-4 text-right">

    </div>

    <div class="col-md-4 text-right text-danger bg-warning">
        <h4>
            Total : R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

        </h4>
        <h4>
        Frete : R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>

    </h4>
    <hr>
    <h4>
    Total com Frete: R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>

</h4>

    </div>

    <!-- botão de limpar-->
    <div class="col-md-4 ">


      
        <form name="pedido_finalizar" id="pedido_finalizar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_FINALIZAR']->value;?>
">
        <button class="btn btn-success btn-block" type="submit"><i class="glyphicon glyphicon-ok"></i> Finalizar Pedido </button>
        </form>
    </div>
    <br>
    
</section>
<br>
<br>
</form>

</div>



</section>
<br>
<br>
<br>
<br><?php }
}
