<style>
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

<center>  <p class="textoinicio"> Olá {$NOME_CLIENTE} , obrigado pela sua compra em {$SITE_NOME} <br>
    <a href="{$SITE_HOME}"> {$SITE_HOME} </a>
</p></center>


<center><section class="row">
    <p class="minhaconta">
        Para acessar a sua conta e ter um histórico de seus pedidos acesse nosso site, e sua conta<br>
        <a href="{$PAG_MINHA_CONTA}"> Minha conta: {$PAG_MINHA_CONTA} </a>

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
            {foreach from=$PRO item=P}
    
                <tr style="border: 1px solid #b2dba1">
    
                    <td> <img src="{$P.pro_img}" alt=" {$P.pro_nome} "> </td>
                    <td> {$P.pro_nome} </td>
                    <td> {$P.pro_valor} </td>
                    <td> {$P.pro_qtd} </td>
                    <td> {$P.pro_subTotal} </td>
    
    
    
                </tr>
    
            {/foreach}

        </table>

    </center>


</section><!-- fim da listagem itens -->


<!-- botoes de baixo e valor total -->
<div class="sessao" style="text-align:right">

    <p class="total">
        <b>Total :</b> R$ {$TOTAL}
    </p>
    <p class="frete">
        <b>Frete</b> : R$ {$FRETE}
    </p>
    <p class="totalfrete" style=" color:#062a46; font-size:18px;">
        <b>Final : R$ {$TOTAL_FRETE}</b>
    </p>

</div>
<br>