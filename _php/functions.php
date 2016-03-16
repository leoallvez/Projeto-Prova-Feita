<?php 
	//Essa função recebe e valida o valor das notas passadas pelas url.
	function recebeNota($v){
		return number_format((isset($_GET[$v])?$_GET[$v]:0),1);
	}
	//Essa função recebe e valida o valor dos radios passadas pelas url.
	function recebeRadio($v){
		return isset($_GET[$v])?$_GET[$v]:"n";
	}
	/*Essa função gera dinamicamente das tags <option> 
	para auto preechimento das notas*/
	function notas(){
		echo "<datalist id='lista'>";
		$n = 0.0;
		for($i = 0; $i <= 100;$i++){
			echo "<option value='".$n."'></option>";
			$n += 0.1;
		}
		echo "</datalist>";
	}
?>