 <script>
     $(document).ready(function() {

         // validar frete
         $('#buscar_frete').click(function() {

             var CEP_CLIENTE = $('#cep_frete').val();
             var PESO_FRETE = $('#peso_frete').val();

             if (CEP_CLIENTE.length !== 8) {
                 alert('Digite seu CEP corretamente, 8 dígitos e sem traço ou ponto');
                 $('#frete').addClass(' text-center text-danger');
                 $('#frete').html('<b>Digite seu CEP corretamente, 8 dígitos e sem traço ou ponto</b>');
                 $('#cep_frete').focus();
             } else {


                 $('#frete').html('<img src="view/images/loader.gif"> <b>Carregando...</b>');
                 $('#frete').addClass(' text-center text-danger');

                 // carrego o combo com os bairros

                 $('#frete').load('controller/frete.php?cepcliente=' + CEP_CLIENTE + '&pesofrete=' +
                     PESO_FRETE);

             } // fim do IF digitei o CEP


         }); // fim do change


     }); // fim do ready
 </script>


 <h3>Meu Carrinho</h3>

 <!-- botoes e opções de cima -->
 <section class="row">

     <div class="col-md-12 " align="right">
         <a href="{$PAG_PRODUTOS}" class="btn btn-info" title="">Comprar Mais</a>
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

             <!--
        <tr> 
        
            
            <td colspan="6" align="right"><a href="" class="btn btn-success" title="">Comprar Mais</a></td> 
        </tr> -->

             <tr class="text-danger bg-danger">
                 <td></td>
                 <td>Produto</td>
                 <td>Valor R$</td>
                 <td>X</td>
                 <td>Sub Total R$</td>
                 <td></td>

             </tr>


             {foreach from=$PRO item=P}
    
                 <tr>
    
                     <td> <img src="{$P.pro_img}" alt="{$P.pro_nome}"> </td>
                     <td> {$P.pro_nome} </td>
                     <td> {$P.pro_valor} </td>
                     <td> {$P.pro_qtd} </td>
                     <td> {$P.pro_subTotal} </td>
                     <td>
                         <form name="carrinho_dell" method="post" action="{$PAG_CARRINHO_ALTERAR}">
    
                             <input type="hidden" name="pro_id" value="{$P.pro_id}">
                             <input type="hidden" name="acao" value="del">
    
                             <button class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-minus"></i> </button>
                         </form>
                     </td>
    
    
                 </tr>
    
             {/foreach}

         </table>

     </center>


 </section><!-- fim da listagem itens -->



 <!--  bloco frete -->
 <section class="row" id="dadosfrete">




     <div class="col-md-4"></div>


     <div class="col-md-4">

         <!-- campos para tratar  do  frete -->
         <input type="hidden" name="peso_frete" id="peso_frete" value="{$PESO}" class="form-control " readonly>

         <input type="text" name="cep_frete" class="form-control" id="cep_frete" value="" placeholder="digite seu cep">


         <input type="hidden" name="frete_valor" id="frete_valor" value="0">


     </div>


     <div class="col-md-4">
         <!-- botão frete -->

         <button class="btn btn-warning btn-block" id="buscar_frete"> <i class="glyphicon glyphicon-send"></i> Calcular
             Frete </button>

             

     </div>



 </section>


 <br>
 <hr>

 <!-- botoes de baixo e valor total -->
 <section class="row" id="total">

     <div class="col-md-4 text-right">

     </div>

     <div class="col-md-4 text-right text-danger bg-warning">
         <h4>
             Total : R$ {$TOTAL}
         </h4>
     </div>

     <!-- botão de limpar-->
     <div class="col-md-4 ">

         <form name="limpar" method="post" action="{$PAG_CARRINHO_ALTERAR}">
             <input type="hidden" name="acao" value="limpar">
             <input type="hidden" name="pro_id" value="1">

             <button class="btn btn-danger btn-block"> <i class="glyphicon glyphicon-trash"></i> Limpar Tudo</button>
             <br>

         </form>
         <form name="pedido_confirmar" id="pedido_confirmar" method="post" action="{$PAG_CONFIRMAR}">

         <span id="frete"></span>

             <button class="btn btn-success btn-block" type="submit"> <i class="glyphicon glyphicon-ok"></i> Confirmar
                 Pedido </button>



         </form>

     </div>




     <!-- botão finalzar -->



 </section>
 <br>

 <hr>






 </form>

 </div>



 </section>
 <br>
 <br>
 <br>
 <br>