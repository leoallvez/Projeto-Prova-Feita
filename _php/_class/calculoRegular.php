<?php
include "_php/_class/calculo.php";
class CalculoRegular extends Calculo{
	#nota integrada.
	protected $ni; 

	public function __construct($m1, $nd, $ni){
		# contrutor classe pai.
		parent::__construct($m1, $nd);
		$this->ni = $ni;
		$this->calcularM2();
		$this->calcularMedia();
	}

	public function getM1(){
		return $this->m1;
	}

	public function getNd(){
		return $this->nd;
	}

	public function getNi(){
		return $this->ni;
	}

	#Essw metodo calcula a nota da m2.
	protected function calcularM2(){
		$this->m2 = number_format((($this->nd * 0.70 )+( $this->ni * 0.30)),2);
	}

	public function getM2(){
		return $this->m2;
	}
	#Esse metodo simula uma sobrecarga de metodos de acordo com a quant. parametro. 
	protected function calcularMedia(){
		$n = func_num_args(); #quantiade de parametros.
		$m2 = func_get_args(); #array dos parametros.
		if($n == 0){
			$this->me = number_format((($this->m1 + ($this->m2 * 2)) / 3),1);
		}elseif($n = 1){
			return number_format((($this->m1 + ($m2[0] * 2)) / 3),2);		
		}else{
			echo "quantiade de parametros invalidos";
		}
		return 0;
	}

	public function getMe(){

		return $this->me;
	}
	/*Esse metodo retorna a nota min. que o aluno tem 
	que tirar na diciplina e integrada para passar direto.*/
	public function calcularMin(){
		$m2 = 0;
		while(true){
			$n = $this->calcularMedia($m2);
			if($n == 5.0){
				return number_format($m2,2);
			}
			$m2 = $m2 + 0.01;
		}
		return $m2;
	}
	/*Esse metodo retorna a nota min. que o aluno tem 
	que tirar na Integrada para passar passar direto.*/
	public function calcularMinIntegrada(){
		$ni = 0;
		while(true){
			$m2 = number_format((($this->nd * 0.70 )+( $ni * 0.30)),2);
			$me = number_format((($this->m1 + ($m2 * 2)) / 3),2);
			if($me >= 5.00){
				return number_format($ni,1);
			}
			$ni = $ni + 0.01;
		}
		return $ni;
	}
	/*Esse metodo retorna a nota min. que o aluno tem 
	que tirar na prova diciplinar para passar passar direto.*/
	public function calcularMinDisciplina(){
		$nd = 0;
		while(true){
			$m2 = number_format((($nd * 0.70 )+( $this->ni * 0.30)),2);
			$me = number_format((($this->m1 + ($m2 * 2)) / 3),2);
			if($me >= 5.00){
				return number_format($nd,1);
			}
			$nd = $nd + 0.01;
		}
		return $nd;
	}
	/*Esse metodo mostra a situação final do aluno*/
	public function mostrarStatus(){
		if($this->me >= 5){
			$s = "Aprovado";
		}elseif(($this->me >= 3) && ($this->me <= 4.9)){
			$s = "De exame";
		}else{
			$s = "Reprovado";
		}
		return $s;
	}
}
?>