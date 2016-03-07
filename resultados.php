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
				#Instanciando objeto nota e Váriaveis usadas nas criação da tabela dinamica.
				if($rd == 's' && $ri == 'n'){
					$n = new calculoRegular($m1, $nd,0);
					$texto[0] = "Nota avaliação de Disciplina: ";
					$texto[1] = "Parcial da M2: ";
					$texto[2] = "Parcial da Média Final: ";
					$texto[3] = "Nota mínima integrada para passar direto: ";
					$texto[4] = "Você tirou notas muito baixas na M1 e na avaliação de Disciplina 
				    essa é nota mínima você terá que tirar na Integrada para ficar de exame: ";
				}elseif($rd == 'n' && $ri == 's'){
					$n = new calculoRegular($m1, 0, $ni);
					$texto[0] = "Nota Integrada: ";
					$texto[1] = "Parcial da M2: ";
					$texto[2] = "Parcial da Média Final: ";
					$texto[3] = "Nota mínima avaliação de Disciplina para passar direto: ";
					$texto[4] = "Você tirou notas muito baixas na M1 e Integrada essa é nota mínima 
					você tem que tirar na avaliação de Disciplina para ficar de exame: ";
				}elseif($rd == 'n' && $ri == 'n'){
					$n = new calculoRegular($m1, 0, 0);
					$texto[0] = "Parcial da M2: ";
					$texto[1] = "As notas mínima que você que tem que tirar na avaliação de Disciplina 
					e Integrada para passar direto são: ";
				}else{
					$n = new calculoRegular($m1, $nd, $ni);
					$texto[0] = "Nota avaliação de Disciplina: ";
					$texto[1] = "Nota Integrada: ";
				}
			?>
			<table> 
				<th colspan='4' id='d'>Resultados:</th>
				<tr>
			    	<td class='e'>Nota M1: </td> 
			    	<td class='d'><?= $n->getM1(); ?></td>
				</tr>
				<?php if($rd == "s" && $ri == "n"): ?>
					<?php if($n->calcularMinIntegrada() > 10): ?>
						<tr>
							<td class='e'><?= $texto[0]; ?></td>
				    		<td class='d'><?= $n->getNd(); ?></td>
						</tr>
						<tr>
							<td class='e'><?= $texto[1]; ?></td>
							<td class='d'><?= $n->getM2(); ?></td>
						</tr>
						<tr>
							<td class='e'><?= $texto[2]; ?></td>
							<td class='d'><?= $n->getMe(); ?></td>
						</tr>
						<tr>
							<td class='e'><?= $texto[4]; ?></td>
							<td class='d'><?= $n->calcularMinIntegradaExame(); ?></td>
						</tr>
					<?php else: ?>
						<tr>	
							<td class='e'><?= $texto[0]; ?></td>
				    		<td class='d'><?= $n->getNd(); ?></td>
						</tr>
						<tr>
							<td class='e'><?= $texto[1]; ?></td>
							<td class='d'><?= $n->getM2(); ?></td>
						</tr>
						<tr>
							<td class='e'><?= $texto[2]; ?></td>
							<td class='d'><?= $n->getMe(); ?></td>
						</tr>
						<tr>
							<td class='e'><?= $texto[3]; ?></td>
							<td class='d'><?= $n->calcularMinIntegrada(); ?></td>
						</tr>
					<?php endif; ?>
				<?php elseif($rd == "n" && $ri == "s"): ?>
					<?php if($n->calcularMinDisciplina() > 10): ?>
						<tr>
							<td class='e'><?= $texto[0]; ?></td>
				    		<td class='d'><?= $n->getNi(); ?></td>
						</tr>
						<tr>
							<td class='e'><?= $texto[1]; ?></td>
							<td class='d'><?= $n->getM2(); ?></td>
						</tr>
						<tr>
							<td class='e'><?= $texto[2]; ?></td>
							<td class='d'><?= $n->getMe(); ?></td>
						</tr>
						<tr>
							<td class='e'><?= $texto[4]; ?></td>
							<td class='d'><?= $n->calcularMinDisciplinaExame(); ?></td>
						</tr>
					<?php else: ?>
						<tr>
							<td class='e'><?= $texto[0]; ?></td>
				    		<td class='d'><?= $n->getNi(); ?></td>
						</tr>
						<tr>
							<td class='e'><?= $texto[1]; ?></td>
							<td class='d'><?= $n->getM2(); ?></td>
						</tr>
						<tr>
							<td class='e'><?= $texto[2]; ?></td>
							<td class='d'><?= $n->getMe(); ?></td>
						</tr>
						<tr>
							<td class='e'><?= $texto[3]; ?></td>
							<td class='d'><?= $n->calcularMinDisciplina(); ?></td>
						</tr>
					<?php endif; ?>
				<?php elseif($rd == "n" && $ri == "n"): ?>
					<tr>
						<td class='e'><?= $texto[0]; ?></td>
						<td class='d'><?= $n->getMe(); ?></td>
					</tr>
					<tr>
						<td class='e'><?= $texto[1]; ?></td>
					    <td class='d'><?= $n->calcularMin(); ?></td>
					</tr>
				<?php else: ?>
					<tr>	
						<td class='e'><?= $texto[0]; ?></td>
				    	<td class='d'><?= $n->getNd(); ?></td>
					</tr>
					<tr>	
						<td class='e'><?= $texto[1]; ?></td>
				    	<td class='d'><?= $n->getNi(); ?></td>
					</tr>
					<tr>
						<td class='e'>Nota M2</td>
						<td class='d'><?= $n->getM2(); ?></td>
					</tr>
					<tr>
						<td class='e'>Média Final:</td>
						<td class='d'><?= $n->getMe(); ?></td>
					</tr>
					<tr>
						<td class='e'>Situação do Aluno:</td>
						<td class='d'><?= $n->mostrarStatus(); ?></td>
					</tr>
				<?php endif; ?>
			</table>
			</br>
			<a class='bot' id='vot'href='javascript:history.go(-1)'>Voltar</a>
		</div>
		<?php include "_php/footer.php"; ?>
	</body>
</html>