<?php

abstract class Calculo{
	protected $m1; #nota m1.
	protected $nd; #nota discliplina.
	protected $m2; #nota m2.
	protected $me; #média final.

	public function __construct($m1, $nd){
		$this->m1 = $m1;
		$this->nd = $nd;
	}
	# Esse metodo deve retornar a media do aluno.
	protected abstract function calcularMedia();
	# Esse metodo deve retornar a nota minima para o aluno passar.
	protected abstract function calcularMin();
	# Essw metodo deve retornar a situação do aluno apos as provas.
	protected abstract function mostrarStatus();
}
?>