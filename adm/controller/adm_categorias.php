<?php 

$smarty = new Template();
$categorias = new Categorias();

$categorias->GetCategorias();

if(isset($_POST['cate_nova'])){
    $cate_nome = $_POST['cate_nome'];
    if($categorias->Inserir($cate_nome)){
        echo '<div class="alert alert-success">Categoria inserida com sucesso</div>';
        Rotas::Redirecionar(0, Rotas::pag_CategoriasADM()); 
    }
}

if(isset($_POST['cate_editar'])){
    $cate_id = $_POST['cate_id'];
    $cate_nome = $_POST['cate_nome'];
    if($categorias->Editar($cate_nome, $cate_id)){
        echo '<div class="alert alert-success">Categoria editada com sucesso</div>';
        Rotas::Redirecionar(0, Rotas::pag_CategoriasADM()); 
    }
}

if(isset($_POST['cate_apagar'])){
    $cate_id = $_POST['cate_id'];  
    if($categorias->Apagar($cate_id)){
        echo '<div class="alert alert-success">Categoria apagada com sucesso</div>';
        Rotas::Redirecionar(0, Rotas::pag_CategoriasADM()); 
    }
}

$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->display('adm_categorias.tpl');

?>