<h3 class="text-center text-success"> Obrigado pelo seu pedido </h3>
<hr>
<section class="row">
    
    <div class="col-md-3"></div> 
   
    <div class="col-md-6 thumbnail">
        
        
         <h4> Informações do pagamento </h4>
            <p> <b>Código transação:</b> {$CODIGO}</p>
            <p> <b>Referencia:</b> {$REF}</p>
            <p> <b>Status do pagamento:</b> {$PAGO}</p>
            <p> <b>Forma pagamento: </b>{$FORMA_PAG}</p>
            
            
         
            <form name="pagamento" method="post" action="{$PAG_ITENS}">
                <input type="hidden" name="cod_pedido" value="{$REF}">  
                <button class="btn btn-success btn-block btn-lg"> Detalhes deste Pedido</button>



            </form>        

        
    </div> 
    <div class="col-md-3"></div> 
    
    
   
    
    
</section>