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
		<div class="main">
			<?php
				include '_php/functions.php';
				include '_php/_class/calculoRegular.php';
				#Recebendo valor das notas.
				$m1 = recebeNota('m1');
				$nd = recebeNota('nd');
				$ni = recebeNota('ni');
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
					$texto[4] = "Suas notas M1 e na avaliação de Disciplina não são suficientes para passar direto, 
					essa é nota mínima você terá que tirar na Integrada para ficar de exame:  ";
				}elseif($rd == 'n' && $ri == 's'){
					$n = new calculoRegular($m1, 0, $ni);
					$texto[0] = "Nota Integrada: ";
					$texto[1] = "Parcial da M2: ";
					$texto[2] = "Parcial da Média Final: ";
					$texto[3] = "Nota mínima avaliação de Disciplina para passar direto: ";
					$texto[4] = "Suas notas M1 e Integrada não são suficientes para passar direto, 
					essa é nota mínima você você tem que tirar na avaliação de Disciplina para ficar de exame: ";
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
				<!-- tabela dimanica de resultados --> 
				<th colspan='4' id='d'>Resultados:</th>
				<tr>
			    	<td class='e'>Nota M1: </td> 
			    	<td class='d'><?= $n->getM1(); ?></td>
				</tr>
				<!-- Se o aluno fez a avaliação de disciplina e a integrada não --> 
				<?php if($rd == "s" && $ri == "n"): ?>
					<!--Se a nota minima para passar direto seja > 10 calcular mínima para exame.-->
					<?php if($n->calcularMinIntegrada() >10): ?>

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
						<!--Se a nota mínima da Integrada para ficar de exame seja > 10 mostrar essa mensagem.-->
						<?php if($n->calcularMinIntegradaExame() >10): ?>
							<tr>
								<td class='m'colspan="2" >
									Você tirou notas muito baixas na M1 e na avaliação de Disciplina,  
									infelizmente com essas notas não é possível nem mesmo ficar de exame, 
									por mais que você tire 10 na Integrada.
								</td>
							</tr>
						<!--Senão mostrar a minima da Integrada para ficar exame.-->
						<?php else: ?>
							<tr>
								<td class='m'><?= $texto[4]; ?></td>
								<td class='d'><?= $n->calcularMinIntegradaExame(); ?></td>
							</tr>
						<?php endif; ?>
					<!--Senão mostrar a nota mínima para passar direto-->
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
				<!-- Se o aluno não fez a avaliação de disciplina e fez a integrada--> 
				<?php elseif($rd == "n" && $ri == "s"): ?>
					<!--Se a nota minima para passar direto seja > 10 calcular mínima para exame.-->
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
							<td class='m'><?= $texto[4]; ?></td>
							<td class='d'><?= $n->calcularMinDisciplinaExame(); ?></td>
						</tr>
					<!--Senão mostrar a minima da avaliação de disciplina para ficar exame.-->
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
				<!-- Se o aluno não fez a avaliação de disciplina e nem a integrada--> 
				<?php elseif($rd == "n" && $ri == "n"): ?>
					<tr>
						<td class='e'><?= $texto[0]; ?></td>
						<td class='d'><?= $n->getMe(); ?></td>
					</tr>
					<tr>
						<td class='e'><?= $texto[1]; ?></td>
					    <td class='d'><?= $n->calcularMin(); ?></td>
					</tr>
				<!-- Se o aluno fez a avaliação de disciplina e a integrada também--> 
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
			<a class='bot' id='vot'href='index.php'>Voltar</a>
		</div>
		<?php include "_php/footer.php"; ?>
	</body>
</html>