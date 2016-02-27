<!DOCTYPE html>
<html>
	<head>
		<title>Prova Feita | Resultados</title>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1'>
		<link rel="shortcut icon" href="_img/logo.ico" type="image/x-icon"/>
		<link rel='stylesheet' href='_css/style.css' media='screen and (color)'>
		<link rel='stylesheet' href='_css/mobile.css' media='(max-width: 720px)'>
	</head>
	<body>
		<?php include "_php/header.php";?>
		<div id='principal'>
			<?php
				include '_php/functions.php';
				include '_php/_class/calculoRegular.php';
				#Recebendo valor das notas.
				$m1 = recebeValor('m1');
				$nd = recebeValor('nd');
				$ni = recebeValor('ni');
				#Recebendo valor dos radios.
				$rd = recebeRadio("rd");#diciplina.
				$ri = recebeRadio("ri");#integrada.
				#Instanciando objeto nota.
				$n = new calculoRegular($m1, $nd, $ni);
			?>
			<table> 
				<th colspan='4' id='d'>Resultados:</th>
				<tr>
			    	<td id='e'>Nota M1: </td> 
			    	<td id='d'><?= $n->getM1(); ?></td>
				</tr>
				<tr>
					<td id='e'>Nota Diciplina: </td>
				    <td id='d'><?= $n->getNd(); ?></td>
				</tr>
				<tr>
					<td id='e'>Nota Integrada: </td>
					<td id='d'><?= $n->getNi(); ?></td>
				</tr>
				<tr>
					<td id='e'>Nota M2:</td>
					<td id='d'><?= $n->getM2(); ?></td>
				</tr>
				<tr>
					<td id='e'>Média Final:</td>
					<td id='d'><?= $n->getMe(); ?></td>
				</tr>
				<tr>
				<?php
					if($rd == "s" && $ri == "n"){
						echo "<td id='e'>Nota mínima integrada:</td>
							  <td id='d'>".$n->calcularMinIntegrada()."</td>";
					}elseif($rd == "n" && $ri == "s"){
						echo "<td id='e'>Nota mínima diciplina :</td>
							  <td id='d'>".$n->calcularMinDisciplina()."</td>";
					}else{
						echo "<td id='e'>Nota mínima diciplina e integrada:</td>
					          <td id='d'>".$n->calcularMin()."</td>";
					}
				?>
				</tr>
				<tr>
					<td id='e'>Situação do Aluno:</td>
					<td id='d'><?= $n->mostrarStatus(); ?></td>
				</tr>
			</table>
			</br>
			<a class='bot' id='vot'href='javascript:history.go(-1)'>Voltar</a>
		</div>
		<?php include "_php/footer.php"; ?>
	</body>
</html>