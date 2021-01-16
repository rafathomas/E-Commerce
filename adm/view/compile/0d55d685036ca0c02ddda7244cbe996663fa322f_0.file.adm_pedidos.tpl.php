<?php
/* Smarty version 3.1.36, created on 2020-08-15 21:25:30
  from 'C:\wamp64\www\loja\adm\view\adm_pedidos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f387cfa210555_62406611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d55d685036ca0c02ddda7244cbe996663fa322f' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\adm\\view\\adm_pedidos.tpl',
      1 => 1597537480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f387cfa210555_62406611 (Smarty_Internal_Template $_smarty_tpl) {
?><h4 class="text-center"> Gerenciar Pedidos </h4>
<hr>

<section class="row" id="pesquisa">
    <div class="espacamento">
        <!---  faz  uma busca entre datas -->
        <label class="espacamento"> Buscar entre datas</label>
        <form name="buscardata" method="post" action="">

            <div class="col-md-3">
                <input type="date" name="data_ini" class="form-control" required>

            </div>

            <div class="col-md-3">

                <input type="date" name="data_fim" class="form-control" required>

            </div>


            <div class="col-md-3">

                <button class="btn btn-success"> Buscar </button>

            </div>


            <div class="col-md-3">

            </div>


        </form>
    </div>


</section>

<br>

<section class="row">

    <div class="espacamento">
        <!--- faz  uma busca  por texto -->
        <label class="espacamento"> Buscar por Referencia</label>
        <form name="buscarrefcod" method="post" action="">

            <div class="col-md-3">

                <input type="text" name="txt_ref" class="form-control" required>
            </div>
            <div class="col-md-3">

                <button class="btn btn-success"> Buscar </button>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>

        </form>
    </div>


</section>

<hr>

<section class="row" id="pedidos">


    <center>
        <table class="table table-bordered " style="width: 90%">

            <tr class="text-success bg-success">
                <td>Cliente</td>
                <td>Data</td>
                <td>Hora</td>
                <td>Ref</td>

                <td>Status</td>
                <td></td>
                <td></td>
            </tr>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PEDIDOS']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                <tr>
    
                    <td><?php echo $_smarty_tpl->tpl_vars['P']->value['cli_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['P']->value['cli_sobrenome'];?>
</td>
                    <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_data'];?>
</td>
                    <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_hora'];?>
</td>
                    <td style="width: 10%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_ref'];?>
</td>
    
    
                    <?php if ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'NAO') {?>
                        <td style="width: 15%"><span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
                    <?php } else { ?>
                        <td style="width: 15%"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</td>
                    <?php }?>
    
    
    
    
                    <td style="width: 10%">
                        <!---- formulario que vai para itens do pedido ---->
                        <form name="itens" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
                            <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
                            <button class="btn btn-info"><i class="glyphicon glyphicon-menu-hamburger"></i> Detalhes</button>
                        </form>
                    </td>
    
    
                    <td>
    
                        <form name="deletar" method="post" action="">
                            <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
                            <button class="btn btn-danger" name="ped_apagar" value="ped_apagar"><i class="glyphicon glyphicon-remove"></i> </button>
                        </form>
    
                    </td>
    
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </table>
    </center>
</section>
 <!--  paginação inferior   -->
 <section id="pagincao" class="row">
 <center>
     <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

 </center>
</section><?php }
}
