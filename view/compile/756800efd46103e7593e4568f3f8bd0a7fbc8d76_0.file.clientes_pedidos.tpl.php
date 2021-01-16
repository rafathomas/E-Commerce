<?php
/* Smarty version 3.1.36, created on 2020-08-13 14:52:50
  from 'C:\wamp64\www\loja\view\clientes_pedidos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f357df2178440_00934918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '756800efd46103e7593e4568f3f8bd0a7fbc8d76' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\clientes_pedidos.tpl',
      1 => 1597340948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f357df2178440_00934918 (Smarty_Internal_Template $_smarty_tpl) {
?><br>
<br>

<section class="row" id="pedidos">

    <h4 class="text-center">Meus Pedidos</h4>

    <center>
    <?php if ($_smarty_tpl->tpl_vars['PEDIDOS_QUANTIDADE']->value > 0) {?>
        <table class="table table-bordered" style="width: 90%">

            <tr class="text-danger bg-danger">
                <td>Data</td>
                <td>Hora</td>
                <td>Ref</td>

                <td>Status</td>
                <td></td>
            </tr>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PEDIDOS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                <tr>
    
                    <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_data'];?>
</td>
                    <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_hora'];?>
</td>
                    <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_ref'];?>
</td>
    
    
                    <?php if ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'Cancelado') {?>
                        <td style="width: 15%"><span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
                    <?php } elseif ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'Pago') {?>
                        <td style="width: 15%"><span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
                    <?php } else { ?>
                        <td style="width: 15%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</td>
                    <?php }?>
    
                    <form name="itens" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
    
                        <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
                        <td style="width: 10%"><button class="btn btn-default"><i
                                    class="glyphicon glyphicon-menu-hamburger"></i> Detalhes</button></td>
    
                    </form>
    
                </tr>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </table>
        <?php } else { ?>
        Sem pedidos para este cliente
    <?php }?>
    </center>

</section>
 <!--  paginação inferior   -->
 <section id="pagincao" class="row">
 <center>
     <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

 </center>
</section><?php }
}
