$(document).ready(function(){
	/*Input number Diciplina some*/
	$('#drn').click(function() {
		/* Act on the event */
		$('#nnd').hide('slow');
	});
	/*Input number Diciplina aparece*/
	$('#dry').click(function() {
		/* Act on the event */
		$('#nnd').fadeIn('slow');
	});
	/*Input number Integrada some*/
	$('#irn').click(function() {
		/* Act on the event */
		$('#nni').hide('slow');
	});
	/*Input number Integrada aparece*/
	$('#iry').click(function() {
		/* Act on the event */
		$('#nni').fadeIn('slow');
	});
	/*Botão de limpar*/
	$('#clear').click(function() {
		/* Act on the event */
		$('#nnd').hide('slow');
		$('#nni').hide('slow');
	});
});