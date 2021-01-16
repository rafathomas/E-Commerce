{foreach from=$PRO item=P}

    <h3 class="text-center">{$P.pro_nome} - Ref: {$P.pro_ref}</h3>
<hr>

<div class="row">
  

  {*  div da esquerda imagem do produto  *}
  <div class="col-md-6 ">

      <img class="thumbnail" src="{$P.pro_img_g}" alt="" > 

  </div>

 
  {*    div da direita info produtos    *}
  <div class="col-md-6 thumbnail">
      
        <img src="{$TEMA}/images/logo-pagseguro.png" alt="">
<hr>
          
      
      <div class="col-md-6">
         <h3 class="text-center preco">R$ {$P.pro_valor}</h3>   
          
      </div>
    
      <div class="col-md-6">
          <form name="carrinho" method="post" action="{$PAG_COMPRAR}">
              <input type="hidden" name="pro_id" value="{$P.pro_id}">
              <input type="hidden" name="acao" value="add">
          <button  class="btn btn-success btn-lg">Comprar</button>
           </form> 
          
      </div>
         
       
    

   
      
  

  </div>




</div>
      <!-- -->
       {*  listagem de imagens extras  *}
      <div class="row">
          <hr>
            <h4 class="text-center">Mais imagens</h4>

            <ul style="list-style: none">
               {foreach from=$IMAGES item=I }
                   
                <li class="col-md-3 ">
                    <img src="{$I.img_nome}" alt="" class="thumbnail">

                </li>
               {/foreach}

               
            </ul>
            

      </div>
          {*    <!-- descrição do produto-->  *}
    
      <div class="row">
          <hr>
          <h4 class="text-center">Descrição do produto</h4>

          {$P.pro_desc} 

      </div>  
          <br>
          <br>


{/foreach}