<?php
/* Smarty version 3.1.36, created on 2020-08-02 01:57:31
  from 'C:\wamp64\www\loja\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f261d8b9634d3_58284197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcc81274c26651d7e7b7f161a32213380de98628' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\view\\produtos_info.tpl',
      1 => 1596332638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f261d8b9634d3_58284197 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>

    <h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 - Ref: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
</h3>
<hr>

<div class="row">
  

    <div class="col-md-6 ">

      <img class="thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_g'];?>
" alt="" > 

  </div>

 
    <div class="col-md-6 thumbnail">
      
        <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png" alt="">
<hr>
          
      
      <div class="col-md-6">
         <h3 class="text-center preco">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>   
          
      </div>
    
      <div class="col-md-6">
          <form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
              <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
              <input type="hidden" name="acao" value="add">
          <button  class="btn btn-success btn-lg">Comprar</button>
           </form> 
          
      </div>
         
       
    

   
      
  

  </div>




</div>
      <!-- -->
             <div class="row">
          <hr>
            <h4 class="text-center">Mais imagens</h4>

            <ul style="list-style: none">
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGES']->value, 'I');
$_smarty_tpl->tpl_vars['I']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
$_smarty_tpl->tpl_vars['I']->do_else = false;
?>
                   
                <li class="col-md-3 ">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_nome'];?>
" alt="" class="thumbnail">

                </li>
               <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

               
            </ul>
            

      </div>
              
      <div class="row">
          <hr>
          <h4 class="text-center">Descrição do produto</h4>

          <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
 

      </div>  
          <br>
          <br>


<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
