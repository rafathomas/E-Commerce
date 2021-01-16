<?php
/* Smarty version 3.1.36, created on 2020-08-17 12:29:58
  from 'C:\wamp64\www\loja\adm\view\adm_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f3aa276d2ea25_83976716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '999d2d1103b48bf31f46911d3ebba4d3f6bd7cc8' => 
    array (
      0 => 'C:\\wamp64\\www\\loja\\adm\\view\\adm_index.tpl',
      1 => 1597678197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3aa276d2ea25_83976716 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html>

<head>
    <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/contatos/contatos.css" rel="stylesheet" type="text/css" />
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery-2.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/contatos/contatos.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!-- meu aquivo pessoal de CSS-->
    <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/tema.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

</head>

<body>

    <!-- começa  o container geral -->
    <div class="container-fluid">

        <!-- começa a div topo -->
        <div class="row" id="topo">


            <div class="container">

                <div class="col-md-6">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/logo-adm.png" alt="">
                </div>

                <div class="col-md-6 text-right">

                    <br><?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>
                        Olá: <?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="btn btn-info"><i class="glyphicon glyphicon-log-out"></i> Sair </a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SENHA']->value;?>
" class="btn btn-warning"><i class="glyphicon glyphicon-asterisk"></i>Alterar Senha </a> <br><br>
                        <h5>
                            <p>Último Login: <?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
 ás <?php echo $_smarty_tpl->tpl_vars['HORA']->value;?>

                            </p>
                        </h5>
                    <?php }?>

                </div>

            </div>




        </div><!-- fim da div topo -->

        <!-- começa a barra MENU-->
        <div class="row" id="barra-menu">

            <!--começa navBAR-->
            <nav class="navbar navbar-inverse">

                <!-- container navBAr-->
                <div class="container">
                    <!-- header da navbar-->
                    <div class="navbar-header">
                        <!-- botao que mostra e esconde a navbar-->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    <!--fim header navbar-->

                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_ADM']->value;?>
"><i class="glyphicon glyphicon-home"></i> Home </a> </li>


                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS']->value;?>
"><i class="glyphicon glyphicon-tag"></i> Categorias </a> </li>

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PRODUTOS']->value;?>
"><i class="glyphicon glyphicon-user"></i> Produtos </a> </li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_CLIENTE']->value;?>
"><i class="glyphicon glyphicon-shopping-cart"></i> Clientes </a> </li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PEDIDOS']->value;?>
"><i class="glyphicon glyphicon-envelope"></i> Pedidos </a> </li>




                        </ul>


                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Digite para buscar" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Buscar</button>
                        </form>

                    </div><!-- fim navbar collapse-->


                </div>
                <!--fim container navBar-->

            </nav><!-- fim da navBar-->





        </div> <!-- fim barra menu-->

        <!-- começa DIV conteudo-->
        <div class="row" id="conteudo">

            <div class="container">

                <!-- coluna da esquerda -->
                <div class="col-md-2" id="lateral">

                    <div class="list-group">
                        <span class="list-group-item active"> Categorias</span>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PRODUTOS']->value;?>
" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> Todos</a>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
    
                            <a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link_adm'];?>
" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> <?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</a>
    
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>





                    </div>
                    <!--fim da list group-->

                </div> <!-- finm coluna esquerda -->

                <!-- coluna direita CONYEUDO CENTRAL -->
                <div class="col-md-10">


                    <ul class="breadcrumb">
                        <li><a href="#"><i class="glyphicon glyphicon-home"></i> Home </a></li>
                        <li><a href="#"> Produtos </a></li>
                        <li><a href="#"> Info </a></li>
                    </ul>
                    <!-- fim do menu breadcrumb-->

                    <?php 

                    Rotas::get_Pagina();
                    //var_dump(Rotas::$pag);
                    ?>

                </div>
                <!--fim coluna direita-->

                <!--Conteúda da página inicial adm-->

                <h4 class="text-center text-danger"> Olá Administrador <b><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</b>, seja bem vindo! O que deseja fazer agora?</h4>
                <section class="row">

                    <div class="text-center">

                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-home"></i> Categorias</a>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PRODUTOS']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-barcode"></i> Produtos</a>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_CLIENTE']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Clientes </a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM_PEDIDOS']->value;?>
" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Pedidos </a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SENHA']->value;?>
" class="btn btn-warning"> Alterar Senha </a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Sair </a>




                    </div>





                </section>

            </div>






        </div><!-- fim DIV conteudo-->

        <!-- começa div rodape -->
        <div class="row" id="rodape">
            <center>
                <h4><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</h4>
                <P>Todos os Direitos Reservados - Rafael Thomas - Data Atual: <?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
</P>
            </center>

        </div><!-- fim div rodape-->



    </div> <!-- fim do container geral -->




</body>

</html><?php }
}
