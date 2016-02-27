<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Teste</title>
		<link rel="stylesheet" href="">
		<?php include "_php/functions.php"; ?>
	</head>
	<body>
		<?php
			/*Esse script testa quanto o aluno tem que tirar 
			na prova diciplina e integrada para ser aprovado*/
			$m1 = 4.5;

			$m2 = faltaM1($m1); 

			/*Essa são as notas já de média*/
			$notaD = $m2 * 0.7;

			$notaI = $m2 * 0.3;

			/*Notas com Inteiras sem média*/
			$nd = $notaD + ($m2 * 0.3);

			$ni = $notaI + ($m2 * 0.7);


			echo "M1: $m1</br>";
			echo "M2 que falta: $m2</br>";
			echo "Nota dicliplina média: $notaD</br>";
			echo "Nota integrada média: $notaI</br>";
			echo "Nota diciplina Total: $nd</br>";
			echo "Nota integrada Total: $ni"


		?>
	</body>
</html>