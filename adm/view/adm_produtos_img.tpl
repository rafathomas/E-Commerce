<h4 class="text-center"> Imagens do produto</h4>
<hr>

<!--- formulario de envio da foto -->
<section class="row" id="novaimg">

    <form name="nova" method="post" action="" enctype="multipart/form-data">

        <div class="col-md-4"></div>

        <div class="col-md-4">

            <input type="hidden" name="pro_id" value="{$PRO}">

            <input type="file" name="pro_img" class="form-control" required>
            <br>



        </div>
        <div class="col-md-4">
            <button class="btn btn-success "> Enviar </button>


        </div>


    </form>

</section>

<hr>

<!-- listando as imagens que existem no produto-->
<section class="row" id="listarimg">

    <!-- formulario de apagar a foto ou varias -->
    <form name="deletar" method="post" action="">


        <ul style="list-style: none">
            {foreach from=$IMAGES item=I}
    
                <li class="col-md-3 ">
                    <img src="{$I.img_nome}" alt="" class="thumbnail">
    
                    <label>Apagar?</label>
                    <input type="checkbox" class="input-lg" name="fotos_apagar[]" value="{$I.img_arquivo}">
    
                </li>
    
            {/foreach}

            <input type="hidden" name="pro_id" value="{$I.img_pro_id}">
        </ul>


        <!--- botao de apagar fotos -->
        <br>
        <section class="col-md-12 text-center" id="apagar">
            <hr>

            <button class="btn btn-danger"> Apagar Marcadas </button>


        </section>
        <br>
        <br>
        <br>


    </form>
</section>
<section>

    <br>
    <br>
    <br>
    <br>
</section>