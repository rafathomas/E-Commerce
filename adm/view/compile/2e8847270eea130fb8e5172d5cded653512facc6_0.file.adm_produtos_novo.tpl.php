<?php
/* Smarty version 3.1.36, created on 2020-08-13 14:42:53
  from 'C:\wamp64\www\loja\adm\view\adm_produtos_novo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f357b9d9a8098_37007455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e8847270eea130fb8e5172d5cded653512facc6' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\adm\\view\\adm_produtos_novo.tpl',
      1 => 1597340363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f357b9d9a8098_37007455 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>

<h4 class="text-center"> Adicionar novo produto </h4>
<hr>


<!-- começa os campos para form produto    -->
<section class="row" id="camposproduto">
    <!--  enctype="multipart/form-data"  -->
    <form name="frm_produto" method="post" action="" enctype="multipart/form-data">

        <div class="col-md-6">
            <label>Produto</label>
            <input type="text" name="pro_nome" id="pro_nome" class="form-control" required>

        </div>



        <div class="col-md-4">
            <label>Categoria</label>

            <select name="pro_categoria" id="pro_categoria" class="form-control" required>

                <option value=""> Escolha </option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>


        </div>




        <div class="col-md-2">
            <label>Ativo</label>
            <select name="pro_ativo" id="pro_cativo" class="form-control" required>

                <option value=""> Escolha </option>
                <option value="NAO"> Não </option>
                <option value="SIM"> Sim </option>

            </select>


        </div>





        <div class="col-md-3">
            <label>Modelo</label>
            <input type="text" name="pro_modelo" id="pro_modelo" class="form-control">

        </div>


        <div class="col-md-2">
            <label>Referencia</label>
            <input type="text" name="pro_ref" id="pro_ref" class="form-control">

        </div>



        <div class="col-md-2">
            <label>Valor</label>
            <input type="text" name="pro_valor" id="pro_valor" class="form-control" required>

        </div>



        <div class="col-md-2">
            <label>Estoque</label>
            <input type="text" name="pro_estoque" id="pro_estoque" class="form-control" required>

        </div>



        <div class="col-md-2">
            <label>Peso</label>
            <input type="text" name="pro_peso" id="pro_peso" class="form-control" required>

        </div>


        <div class="col-md-2">
            <label>Altura</label>
            <input type="text" name="pro_altura" id="pro_altura" class="form-control" required>

        </div>


        <div class="col-md-2">
            <label>Largura</label>
            <input type="text" name="pro_largura" id="pro_largura" class="form-control" required>

        </div>


        <div class="col-md-2">
            <label>Comprimento</label>
            <input type="text" name="pro_comprimento" id="pro_comprimento" class="form-control" required>

        </div>


        <div class="col-md-12">

            <div class="col-md-3">

            </div>

            <div class="col-md-6">

                <hr>
                <label>Imagem Principal</label>
                <input type="file" name="pro_img" class="form-control " id="pro_img">
            </div>

            <div class="col-md-3">



            </div>



        </div>



        <div class="col-md-12">
            <label>Descrição</label>

            <textarea name="pro_desc" id="pro_desc" rows="5" class="form-control"></textarea>

            <?php echo '<script'; ?>
>
                tinymce.init({ selector: 'textarea' });
            <?php echo '</script'; ?>
>






        </div>

        <div class="col-md-12">
            <label>Slug</label>
            <input type="text" readonly name="pro_slug" id="pro_slug" class="form-control">

        </div>

        <!-- botão gravar -->



        <div class="col-md-4">

        </div>

        <div class="col-md-4">
            <br>
            <button class="btn btn-success btn-block btn-lg" name="btn_gravar"> Gravar </button>
        </div>

        <div class="col-md-4">

        </div>





    </form>




</section>

<br>
<br>
<br>
<br><?php }
}
