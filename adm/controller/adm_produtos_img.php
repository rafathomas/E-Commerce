<?php 

$smarty = new Template();

$pro_id = (int)$_POST['pro_id'];
if(isset($_POST['pro_id']) && isset($_FILES['pro_img']['name'])){
		$upload = new ImageUpload();
    	
    	if(!empty($_FILES['pro_img']['name'])){
    	
	    	$upload->Upload(900, 'pro_img');
	    	$pro_img = $upload->retorno;
	    	$gravar = new ProdutosImages();
			$gravar->Insert($pro_img, $pro_id);

    	}
	}

if(isset($_POST['fotos_apagar'])){
	$apagar = new ProdutosImages();
	foreach ($_POST['fotos_apagar'] as $foto){
		$apagar->Deletar($foto);
		$filename = Rotas::get_SiteRAIZ().'/'.Rotas::get_ImagePasta() .$foto;
		@unlink($filename);
	}

	echo '<div class="alert alert-success">Foto(s) apagada(s) com sucesso </div>';
}



$img = new ProdutosImages($pro_id);
$img->GetImagesPRO($_POST['pro_id']);

$smarty->assign('IMAGES', $img->GetItens());
$smarty->assign('PRO', $pro_id);





$smarty->display('adm_produtos_img.tpl');

?>