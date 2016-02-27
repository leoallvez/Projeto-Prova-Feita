<?php 
	function recebeValor($v){
		return number_format((isset($_GET[$v])?$_GET[$v]:0),1);
	}

	function recebeRadio($v){
		return isset($_GET[$v])?$_GET[$v]:"n";
	}
	
	function calculaM2($nd, $ni){
		return number_format((($nd * 0.70 )+( $ni * 0.30)),1);
	}


	function calculaMedia($m1, $m2){
		return number_format((($m1 + ($m2 * 2)) / 3),1);
	}


	function retornaStatus($med){
		if($med >= 5){
			$s = "<span id='g'>Aprovado</span>";
		}elseif(($med >= 3) && ($med <= 4.9)){
			$s = "<span id='y'>De exame</span>";
		}else{
			$s = "<span id='r'>Reprovado</span>";
		}
		return $s;
	}

	function notas(){
		echo "<datalist id='lista'>";
		$n = 0.0;
		for($i = 0; $i <= 100;$i++){
			echo "<option value='".$n."'></option>";
			$n += 0.1;
		}
		echo "</datalist>";
	}

	function faltaM1($m1){
		$m2 = 0;
		while(true){
			$n = calculaMedia($m1, $m2);
			if($n == 5){
				return $m2;
			}
			$m2 = $m2 + 0.1;
		}
	}
?>