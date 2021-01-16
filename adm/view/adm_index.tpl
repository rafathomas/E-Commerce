<!DOCTYPE html>

<html>

<head>
    <title>{$TITULO_SITE}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{$GET_TEMA}/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{$GET_TEMA}/tema/contatos/contatos.css" rel="stylesheet" type="text/css" />
    <script src="{$GET_TEMA}/tema/js/jquery-2.2.1.min.js" type="text/javascript"></script>
    <script src="{$GET_TEMA}/tema/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{$GET_TEMA}/tema/contatos/contatos.js" type="text/javascript"></script>
    <!-- meu aquivo pessoal de CSS-->
    <link href="{$GET_TEMA}/tema/css/tema.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- começa  o container geral -->
    <div class="container-fluid">

        <!-- começa a div topo -->
        <div class="row" id="topo">


            <div class="container">

                <div class="col-md-6">
                    <img src="{$GET_TEMA}/images/logo-adm.png" alt="">
                </div>

                <div class="col-md-6 text-right">

                    <br>{if $LOGADO == true}
                        Olá: {$USER} <a href="{$PAG_LOGOFF}" class="btn btn-info"><i class="glyphicon glyphicon-log-out"></i> Sair </a>
                        <a href="{$PAG_SENHA}" class="btn btn-warning"><i class="glyphicon glyphicon-asterisk"></i>Alterar Senha </a> <br><br>
                        <h5>
                            <p>Último Login: {$DATA} ás {$HORA}
                            </p>
                        </h5>
                    {/if}

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
                            <li><a href="{$GET_SITE_ADM}"><i class="glyphicon glyphicon-home"></i> Home </a> </li>


                            <li><a href="{$PAG_CATEGORIAS}"><i class="glyphicon glyphicon-tag"></i> Categorias </a> </li>

                            <li><a href="{$PAG_ADM_PRODUTOS}"><i class="glyphicon glyphicon-user"></i> Produtos </a> </li>
                            <li><a href="{$PAG_ADM_CLIENTE}"><i class="glyphicon glyphicon-shopping-cart"></i> Clientes </a> </li>
                            <li><a href="{$PAG_ADM_PEDIDOS}"><i class="glyphicon glyphicon-envelope"></i> Pedidos </a> </li>




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

                        <a href="{$PAG_ADM_PRODUTOS}" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> Todos</a>

                        {foreach from=$CATEGORIAS item=C}
    
                            <a href="{$C.cate_link_adm}" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> {$C.cate_nome}</a>
    
                        {/foreach}





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

                    {php}

                    Rotas::get_Pagina();
                    //var_dump(Rotas::$pag);
                    {/php}

                </div>
                <!--fim coluna direita-->

                <!--Conteúda da página inicial adm-->

                <h4 class="text-center text-danger"> Olá Administrador <b>{$USER}</b>, seja bem vindo! O que deseja fazer agora?</h4>
                <section class="row">

                    <div class="text-center">

                        <a href="{$PAG_CATEGORIAS}" class="btn btn-success"><i class="glyphicon glyphicon-home"></i> Categorias</a>

                        <a href="{$PAG_ADM_PRODUTOS}" class="btn btn-success"><i class="glyphicon glyphicon-barcode"></i> Produtos</a>

                        <a href="{$PAG_ADM_CLIENTE}" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Clientes </a>
                        <a href="{$PAG_ADM_PEDIDOS}" class="btn btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Pedidos </a>
                        <a href="{$PAG_SENHA}" class="btn btn-warning"> Alterar Senha </a>
                        <a href="{$PAG_LOGOFF}" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Sair </a>




                    </div>





                </section>

            </div>






        </div><!-- fim DIV conteudo-->

        <!-- começa div rodape -->
        <div class="row" id="rodape">
            <center>
                <h4>{$TITULO_SITE}</h4>
                <P>Todos os Direitos Reservados - Rafael Thomas - Data Atual: {$DATA}</P>
            </center>

        </div><!-- fim div rodape-->



    </div> <!-- fim do container geral -->




</body>

</html>