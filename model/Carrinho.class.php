<?php

class Carrinho{
	private $total_valor, $total_peso, $itens = array();

	function GetCarrinho($sessao = NULL){

		$i = 1;
		$sub = 1.00;
		$peso = 0;

		foreach ($_SESSION['PRO'] as $lista) {
			$sub = ($lista['VALOR_US'] * $lista['QTD']);
			$this->total_valor += $sub;

			$PESO =  $lista['PESO'] * $lista['QTD'];
			$this->total_peso += $peso;


			$this->itens[$i] = array(

				'pro_id' => $lista['ID'],
				'pro_nome'  => $lista['NOME'],
				'pro_valor' => $lista['VALOR'], // 1.000,99
				'pro_valor_us' => $lista['VALOR_US'],  //1000.99
				'pro_peso'  => $lista['PESO'],
				'pro_qtd'   => $lista['QTD'],
				'pro_img'   => $lista['IMG'],
				'pro_link'  => $lista['LINK'],
				'pro_subTotal' => Sistema::MoedaBR($sub),
				'pro_subTotal_us' => $sub

			);
			$i++;
		}

		if (count($this->itens) > 0) {
			return $this->itens;
		} else {
			echo '<h4 class="alert alert-danger"> Não há produtos no carrinho </h4>';
		}
	}

	function GetTotal(){
		return $this->total_valor;
	}

	function GetPeso(){
		return $this->total_peso;
	}

	function CarrinhoADD($id){
		$produtos = new Produtos();
		$produtos->GetProdutosID($id);
		foreach ($produtos->GetItens() as $pro) {
			$ID = $pro['pro_id'];
			$NOME  = $pro['pro_nome'];
            $VALOR_US = $pro['pro_valor_us'];
            $VALOR  = $pro['pro_valor'];
            $PESO  = $pro['pro_peso'];
            $QTD   = 1;
            $IMG   = $pro['pro_img_p'];
            $LINK  = Rotas::pag_ProdutosInfo().'/'.$ID.'/'.$pro['pro_slug'];
            $ACAO  = $_POST['acao'];
		}

		switch ($ACAO) {
			case 'add':
				if(!isset($_SESSION['PRO'][$ID]['ID'])){
					$_SESSION['PRO'][$ID]['ID'] = $ID;
					$_SESSION['PRO'][$ID]['NOME']  = $NOME;
					$_SESSION['PRO'][$ID]['VALOR'] = $VALOR;
					$_SESSION['PRO'][$ID]['VALOR_US'] = $VALOR_US;
					$_SESSION['PRO'][$ID]['PESO']  = $PESO;
					$_SESSION['PRO'][$ID]['QTD']   = $QTD;
					$_SESSION['PRO'][$ID]['IMG']   = $IMG;
					$_SESSION['PRO'][$ID]['LINK']  = $LINK;  
				}else{
					$_SESSION['PRO'][$ID]['QTD']   += $QTD;
				}
				echo '<h4 class="alert alert-success">Produto inserido</h4>';
				break;
			
				case 'del':
					$this->CarrinhoDEL($id);
					echo '<h4 class="alert alert-success">Produto removido</h4>';
					break;

					case 'limpar':
						$this->CarrinhoLimpar();
						echo '<h4 class="alert alert-success">Produtos removidos</h4>';
						break;
		
		}

	}

	private function CarrinhoDEL($id){
		unset($_SESSION['PRO'][$id]);

	}
	private function CarrinhoLimpar(){
		unset($_SESSION['PRO']);
	}
}



?>