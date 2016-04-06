<!DOCTYPE html>
<html>
	<head>
		<title>Prova Feita | Sobre</title>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1'>
		<link rel="shortcut icon" href="_img/logo.ico" type="image/x-icon"/>
		<link rel='stylesheet' href='_css/style.css' media='screen and (color)'>
		<link rel='stylesheet' href='_css/about.css' media='screen and (color)'>
		<link rel='stylesheet' href='_css/mobile.css' media='(max-width: 720px)'>

	</head>
	<body>
		<!--Script plugin Facebook-->
		<div id="fb-root"></div>
		<script>
			(function(d, s, id) {
  			var js, fjs = d.getElementsByTagName(s)[0];
  			if (d.getElementById(id)) return;
  			js = d.createElement(s); js.id = id;
  			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<?php include "_php/header.php";?>
		<div class="main-about">
			<h2>O que é:</h2>
			<p>
				Prova Feita é uma aplicação web de 
				<a href="https://github.com/leoallvez/Projeto-Prova-Feita" target="_blank" 
				title="link para o código no github">código aberto</a> 
				desenvolvida por <strong>Leonardo Pereira Alves</strong>, que visa auxiliar os alunos da 
				<a href="http://www.umc.br/" target="_blank" title="link para o site da universidade">
				Universidade de Mogi das Cruzes (UMC)</a> no cálculo e administração de suas notas. 
			   	Essa aplicação não possui nenhum vínculo com a UMC.
			</p>
			<h2>Como funciona:</h2>
			<p>
			   	Conforme o aluno tem acesso das notas das suas avaliações feitas, 
			    ele poderá calcular quais serão as notas mínimas terá que tirar nas 
			    próximas avaliações para passar direto. 
			</p>
			<h2>Dúvidas e sugestões:</h2>
			<p><strong>contato@provafeita.com.br</strong> ou deixe o seu comentário abaixo.</p>   
		</div>
		<div class="fb-space">
			<h3>Comentários</h3>
			<div style="z-index: 1;" class="fb-comments main"data-href="https://provafeita.com.br" data-numposts="5"></div>
		</div>
		<?php include "_php/footer.php"; ?>
	</body>
</html>
<script>
/** Anulando script de banner...