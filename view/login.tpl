{if $LOGADO == true}


    {else}
    
    <section class="row" id="fazerlogin">
    
        <form name="cliente_login" method="post" action="" >
        
            <div class="col-md-4 text-center">
            
        
               
                    
              
            
            </div>
         
            <!---  aqui estão os campos -->
            <div class="col-md-4">
    
         
                <div class="form-group"> 
                    <label></i> Email: </label>
                    <input type="email"  class="form-control " name="txt_email" value="" placeholder="Digite seu email" required autocomplete="off">        
    
                </div>
    
    
                <div class="form-group"> 
                     <label> Senha: </label>
                     <input type="password"  class="form-control " name="txt_senha" value="" placeholder="Digite sua senha" required>        
               
                </div>
    
    
                <div class="form-group"> 
                    
                    <button class="btn btn-geral btn-block btn-lg"><i class="glyphicon glyphicon-log-in"></i> Entrar </button>
              
                    
                    
                    
                </div>
                <div class="form-group"> 
                    
                    <a href="{$PAG_CADASTRO}" class="btn btn-default "><i class="glyphicon glyphicon-pencil"></i> Me Cadastrar</a>
                 
                    
                    <a href="{$PAG_RECOVERY}" class="btn btn-default "><i class="glyphicon glyphicon-question-sign"></i> Esqueci a Senha</a>
               
                    
                    
                </div>
    
                
            </div><!-- fim dos campos -->
    
    
            <div class="col-md-4 text-center"> 
            
          
            </div>
        
        </form>
        
        
    </section>
    
    {/if}
    
    
    