$(document).ready(function(){

	$('#calculate').click(function() {

		var questions = parseInt($('#number-of-issues').val(),10);
		var hits = parseInt($('#amount-of-hits').val(),10);
			
		if(((hits < 0) || (hits > 40)) || ((questions < 0) || (questions > 40))) {
			$('#result').html('<span>Não é possivel fazer esse calculo os valores devem variar entre 0 e 40!<span>');
			$('#m2').empty();
		}else if(questions < hits){
			$('#result').html('<span>Quantidade de acertos maior que as de questões!<span>');
			$('#m2').empty();
		//NaN (Not a number)
		}else if(!isNaN(hits) && !isNaN(questions)){

			var noteByHits = 10 / questions;
			var fullNote = noteByHits * hits;
			var percentage = (noteByHits * hits) * 0.3;
			//x.toFixed(2) faz o arredondamento da variavel.

			$('#result').html("<span><span class='green'>Nota integral: </span> "+ fullNote.toFixed(1) +"</span>");
			$('#m2').html("<span><span class='green'>30% na M2: </span>"+ percentage.toFixed(1) +"</span>");
		}
	});

	$('#clear').click(function() {
		$('#number-of-issues').val('');
		$('#amount-of-hits').val('');
		$('#result').empty();
		$('#m2').empty();			
	});
});
