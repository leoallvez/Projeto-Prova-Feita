function zera(){
	var m1 = document.getElementById("nm1").value;
	var nd = document.getElementById("nnd").value;
	var ni = document.getElementById("nni").value;

	if(m1 == ""){
		document.getElementById("nm1").value = "0";
	} 
	if(nd == ""){
		document.getElementById("nnd").value = "0";
	}
	if(ni == ""){
		document.getElementById("nni").value = "0";
	}		
}

function zera2(id){
	document.getElementById(id).value = "0";
}

function aviso(spanId, valor){
	if(valor == true){
		document.getElementById(spanId).innerHTML = "<p id='avi'>*nota inteira sem porcentagem</p>";
	}else{
		document.getElementById(spanId).innerHTML = "";
	}
}

function limpa(id){
	var v = document.getElementById(id).value;
	if(v == "0"){
		document.getElementById(id).value = "";
	}
}

function muda(id,radio){
	var v = document.getElementById(id).value;
	if(v == "0"){
		document.getElementById(id).value = "";
	}
	//Altera o radio Buttom. 
	document.forms[0][radio][1].checked = 1;
}




