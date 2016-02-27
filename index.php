<!DOCTYPE html>
<html>
	<head>
		<title>Prova Feita | Início</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="shortcut icon" href="_img/logo.ico" type="image/x-icon" />
		<link rel="stylesheet" href="_css/style.css" media="screen and (color)">
		<link rel="stylesheet" href="_css/mobile.css" media="(max-width: 720px)">
		<?php include "_php/functions.php"; ?>
	</head>
	<body>
		<?php include "_php/header.php";?>
		<div id="principal">
			<form method="get" action="result.php">
				
				<fieldset>
					<legend><strong>M1</strong></legend>
					<label for="nm1">Nota M1:</label></br>
					<input type="number" name="m1" value="" id="nm1" list="lista" step="0.1" 
					min="0" max="10" onFocus="limpa('nm1')" onBlur="zera('nm1')" placeholder="0.0" class="a" ></br>
					<?php notas(); ?>
				</fieldset>
				<fieldset>
					<legend><strong>M2</strong></legend>
					<fieldset class="diciplina">
						<legend>Diciplina</legend>
						<input type="number" name="nd" value="" id="nnd" list="lista" step="0.1" 
						min="0" max="10" onFocus="limpa('nnd')" onClick="aviso('obs-um',true)" onBlur="aviso('obs-um',false)" 
						 placeholder="0.0" class="b"/>
						<?php notas(); ?>
						<fieldset class="escolha">
							<legend>Realizada</legend>
							<label for="drn">não</label>
							<input type="radio" name="rd" id="drn" value="n" checked/>
							<label for="dry">sim</label>
							<input type="radio" name="rd" id="dry" value="s"/>
						</fieldset>
						<span id="obs-um"></span>
					</fieldset>
					<fieldset class="diciplina">
						<legend>Integrada</legend>
						<input type="number" name="ni" value="" id="nni" list="lista" step="0.1" 
						min="0" max="10" onFocus="limpa('nni')" onClick="aviso('obs-dois',true)" onBlur="aviso('obs-dois',false)" 
						placeholder="0.0" class="b"/>
						<?php notas(); ?>
						<fieldset class="escolha">
							<legend>Realizada</legend>
							<label for="irn">não</label>
							<input type="radio" name="ri" id="irn" value="n" checked/>
							<label for="iry">sim</label>
							<input type="radio" name="ri" id="iry" value="s"/>
						</fieldset>
						<span id="obs-dois"></span>
					</fieldset>
				</fieldset>
				<input type="submit" class="bot" value="Calcular" onClick="zera()"/>
				<input type="reset"  class="bot" value="Limpar" id="a"/>
			</form>
		</div>
		<?php include "_php/footer.php"; ?>
		<script src="_javascript/script.js"></script>
	</body>
</html>