/*
@Gefor TI
author: Max Pinheiro
Version: 1.0
year 2018
*/

function countCheck(){//BEGIN FUNCTION countCheck
	/*var check = document.getElementById('customCheck1.1').checked;

	if (check == true) {
		alert("Tá marcado");
	} else{
		alert("NÃO TÁ MARCADO!");
	}*/

		count1 = 0,
		count2 = 0,
		count3 = 0,
		count5 = 0,
		count6 = 0,
		count8 = 0,
		count9 = 0,
		count12 = 0;
		countSE = 0;
		countSD = 0;
		countIE = 0;
		countID = 0;

//BEGIN QUESTION ONE
	for (var i = 1; i < 21; i++) {
		if (document.getElementById("customCheck1."+i).checked == true) {
			count1++;

			if (document.getElementById("customCheck1."+i).value == "SE") {countSE++}
			if (document.getElementById("customCheck1."+i).value == "SD") {countSD++}
			if (document.getElementById("customCheck1."+i).value == "IE") {countIE++}
			if (document.getElementById("customCheck1."+i).value == "ID") {countID++}	
		}
	}

	if (count1 != 5) {
		alert("Por favor, Na PERGUNTA 1 marque 5 itens!\n Você marcou "+ count1 +" item(s)");
	}

//BEGIN QUESTION TWO
	for (var i = 1; i < 21; i++) {
		if (document.getElementById("customCheck2."+i).checked == true) {
			count2++;

			if (document.getElementById("customCheck2."+i).value == "SE") {countSE++}
			if (document.getElementById("customCheck2."+i).value == "SD") {countSD++}
			if (document.getElementById("customCheck2."+i).value == "IE") {countIE++}
			if (document.getElementById("customCheck2."+i).value == "ID") {countID++}		
		}
	}

	if (count2 != 5) {
		alert("Por favor, Na PERGUNTA 2 marque 5 itens!\n Você marcou "+ count2 +" item(s)");
	}

//BEGIN QUESTION THREE
	for (var i = 1; i < 21; i++) {
		if (document.getElementById("customCheck3."+i).checked == true) {
			count3++;

			if (document.getElementById("customCheck3."+i).value == "SE") {countSE++}
			if (document.getElementById("customCheck3."+i).value == "SD") {countSD++}
			if (document.getElementById("customCheck3."+i).value == "IE") {countIE++}
			if (document.getElementById("customCheck3."+i).value == "ID") {countID++}		
		}
	}

	if (count3 != 5) {
		alert("Por favor, Na PERGUNTA 3 marque 5 itens!\n Você marcou "+ count3 +" item(s)");
	}

//BEGIN QUESTION FOUR

			if (document.getElementById("customRadio4_1").checked == true) {countSE++}
			if (document.getElementById("customRadio4_3").checked == true) {countSD++}
			if (document.getElementById("customRadio4_2").checked == true) {countIE++}
			if (document.getElementById("customRadio4_4").checked == true) {countID++}


//BEGIN QUESTION FIVE
	for (var i = 1; i < 17; i++) {
		if (document.getElementById("customCheck5."+i).checked == true) {
			count5++;

			if (document.getElementById("customCheck5."+i).value == "SE") {countSE++}
			if (document.getElementById("customCheck5."+i).value == "SD") {countSD++}
			if (document.getElementById("customCheck5."+i).value == "IE") {countIE++}
			if (document.getElementById("customCheck5."+i).value == "ID") {countID++}		
		}
	}

	if (count5 != 4) {
		alert("Por favor, Na PERGUNTA 5 marque 4 itens!\n Você marcou "+ count5 +" item(s)");
	}

//BEGIN QUESTION SIX
	for (var i = 1; i < 21; i++) {
		if (document.getElementById("customCheck6."+i).checked == true) {
			count6++;
			if (document.getElementById("customCheck6."+i).value == "SE") {countSE++}
			if (document.getElementById("customCheck6."+i).value == "SD") {countSD++}
			if (document.getElementById("customCheck6."+i).value == "IE") {countIE++}
			if (document.getElementById("customCheck6."+i).value == "ID") {countID++}		
		}
	}

	if (count6 != 5) {
		alert("Por favor, Na PERGUNTA 6 marque 5 itens!\n Você marcou "+ count6 +" item(s)");
	}

//BEGIN QUESTION SEVEN	
			if (document.getElementById("customRadio7_3").checked == true) {countSE++}
			if (document.getElementById("customRadio7_4").checked == true) {countSD++}
			if (document.getElementById("customRadio7_1").checked == true) {countIE++}
			if (document.getElementById("customRadio7_2").checked == true) {countID++}

//BEGIN QUESTION EIGTH
	for (var i = 1; i < 17; i++) {
		if (document.getElementById("customCheck8."+i).checked == true) {
			count8++;
			if (document.getElementById("customCheck8."+i).value == "SE") {countSE++}
			if (document.getElementById("customCheck8."+i).value == "SD") {countSD++}
			if (document.getElementById("customCheck8."+i).value == "IE") {countIE++}
			if (document.getElementById("customCheck8."+i).value == "ID") {countID++}		
		}
	}

	if (count8 != 4) {
		alert("Por favor, Na PERGUNTA 8 marque 4 itens!\n Você marcou "+ count8 +" item(s)");
	}

//BEGIN QUESTION NINE
	for (var i = 1; i < 21; i++) {
		if (document.getElementById("customCheck9."+i).checked == true) {
			count9++;

			if (document.getElementById("customCheck9."+i).value == "SE") {countSE++}
			if (document.getElementById("customCheck9."+i).value == "SD") {countSD++}
			if (document.getElementById("customCheck9."+i).value == "IE") {countIE++}
			if (document.getElementById("customCheck9."+i).value == "ID") {countID++}		
		}
	}

	if (count9 != 5) {
		alert("Por favor, Na PERGUNTA 9 marque 5 itens!\n Você marcou "+ count9 +" item(s)");
	}

//BEGIN QUESTION TEN
			if (document.getElementById("customRadio10_4").checked == true) {countSE++}
			if (document.getElementById("customRadio10_1").checked == true) {countSD++}
			if (document.getElementById("customRadio10_2").checked == true) {countIE++}
			if (document.getElementById("customRadio10_3").checked == true) {countID++}

//BEGIN QUESTION ELEVEN
			if (document.getElementById("customRadio11_3").checked == true) {countSE++}
			if (document.getElementById("customRadio11_4").checked == true) {countSD++}
			if (document.getElementById("customRadio11_2").checked == true) {countIE++}
			if (document.getElementById("customRadio11_1").checked == true) {countID++}


//BEGIN QUESTION TWELVE
	for (var i = 1; i < 13; i++) {
		if (document.getElementById("customCheck12."+i).checked == true) {
			count12++;

			if (document.getElementById("customCheck12."+i).value == "SE") {countSE++}
			if (document.getElementById("customCheck12."+i).value == "SD") {countSD++}
			if (document.getElementById("customCheck12."+i).value == "IE") {countIE++}
			if (document.getElementById("customCheck12."+i).value == "ID") {countID++}		
		}
	}

	if (count12 != 3) {
		alert("Por favor, Na PERGUNTA 12 marque 3 itens!\n Você marcou "+ count12 +" item(s)");
	}

	/*
	alert("SD ="+countSD);
	alert("SE ="+countSE);
	alert("ID ="+countID);
	alert("IE ="+countIE);
	alert("TOTAL ="+countIE+countSD+countSE+countID);
	*/

	//var teste = 10;

	//alert(teste + " esse texto");

	document.forms["identification"]["totalSD"].value = countSD;
	document.forms["identification"]["totalSE"].value = countSE;
	document.forms["identification"]["totalID"].value = countID;
	document.forms["identification"]["totalIE"].value = countIE;
} //END FUNCTION countCheck


/*function validateform*/
function valide() {
	document.forms["idform"]["userName"].value = "esse e o novo nome";
	return false;
}

function view_result(){

	countCheck();

	//nome of user
	var x = document.querySelector('#userName').value;
	//alert(x);
	document.getElementById('spanNameUser').innerText = x;

	//values with redution float
	var SE = parseFloat((countSE/40)*100);
	var SE1 = SE.toFixed(1);//arred 

	var SD = parseFloat((countSD/40)*100);
	var SD1 = SD.toFixed(1);

	var IE = parseFloat((countIE/40)*100);
	var IE1 = IE.toFixed(1);

	var ID = parseFloat((countID/40)*100);
	var ID1 = ID.toFixed(1);

	document.querySelector('#SE').innerHTML =  SE1 +'%';
	document.querySelector('#SD').innerHTML =  SD1 +'%';
	document.querySelector('#IE').innerHTML =  IE1 +'%';
	document.querySelector('#ID').innerHTML =  ID1 +'%';

	var bigger = Math.max(SE1, SD1, IE1, ID1);

	if (bigger == SE1) {
		document.querySelector('#SE').style.fontSize = '100px';
	}

	if (bigger == SD1){
		document.querySelector('#SD').style.fontSize = '100px';
	}

	if (bigger == IE1){
		document.querySelector('#IE').style.fontSize = '100px';
	} 

	if (bigger == ID1){
		document.querySelector('#ID').style.fontSize = '100px';
	}
	
}


function valide_key(){
	//alert('Doc está pronto!'); tests - its workit

	var key = document.querySelector('#userCode_teste').value;
	//alert(key[0].toUpperCase());
	
	var isnot_valide = 0;

	for (var i = 1; i < 8; i++) {
			if (isNaN(parseFloat(key[i]))) {
				//alert("Formato inválido. A chave deve ser composta da letra 'F' mais 7 números!");
				isnot_valide = 1;
			}
		}

	if (key == '') {
		alert('Participante NÃO LOCALIZADO ou Formato da Matrícula INVÁLIDO! \n Preencha o campo Matrícula! Com o formato F0000000!');
	} else if (key.length < 8) {
		alert('A matrícula deve ter 8 caracteres!');
	} else if ((key[0].toUpperCase() != 'F') && (key[0].toUpperCase() != 'T')) {
		alert('A matrícula deve começar com "F" !');
	} else if (isnot_valide == 1) {
		alert("Formato inválido. A chave deve ser composta da letra 'F' mais 7 números!");

	} else {
		/*let valide_type = document.querySelector('#btn_consult_result');
		valide_type.type = 'submit';*/


	}//end first if 
}//end function


function valide_key_send(){
	

	var key = document.querySelector('#userCode_teste').value;
	//alert(key[0].toUpperCase());
	
	var isnot_valide = 0;

	for (var i = 1; i < 8; i++) {
			if (isNaN(parseFloat(key[i]))) {
				//alert("Formato inválido. A chave deve ser composta da letra 'F' mais 7 números!");
				isnot_valide = 1;
			}
		}

	if (key == '') {
		alert('Participante NÃO LOCALIZADO ou Formato da Matrícula INVÁLIDO! \n Preencha o campo Matrícula! Com o formato F0000000!');
	} else if (key.length < 8) {
		alert('A matrícula deve ter 8 caracteres!');
	} else if (key[0].toUpperCase() != 'F') {
		alert('A matrícula deve começar com "F" ou "T" !');
	} else if (isnot_valide == 1) {
		alert("Formato inválido. A chave deve ser composta da letra 'F' mais 7 números!");

	} else {
		var valide_type = document.querySelector('#btnEnviar');
		valide_type.type = 'submit';

		
	}//end first if 
}//end function




/*==============================functions for consult_result===============================*/

function view_div_result(){
	var x = document.querySelector('#Id_div_result');
	//alert(x);
	//alert('testeewwww');
	x.style.visibility = 'visible';
	/*x.innerHTML.visibility = "hidden";
	alert('teste');*/

}

//control of visibility div result
function visible_null(){
	var vision_div = document.querySelector('#Id_div_result');
	var input_userCode = document.querySelector('#userCode');

	if (input_userCode.value == '') {
		vision_div.style.visibility = 'visible';
	}
}


//pag dominanciaCerebral.html
//create session variables
function set_name_storage(){
	var name_local_storage = document.querySelector('#userName').value;
	localStorage.setItem("name_storage", name_local_storage);
	//alert(localStorage.getItem("name_storage"));

	localStorage.setItem("countSD_storage", countSD);
	localStorage.setItem("countSE_storage", countSE);
	localStorage.setItem("countID_storage", countID);
	localStorage.setItem("countIE_storage", countIE);
	
}

//pag teste_registro.php
function get_name_storage(){
	var get_name = localStorage.getItem("name_storage");
	document.getElementById('span_name_resultado').innerText = get_name;

	var get_text_top_left = localStorage.getItem("countSE_storage");
	var get_SE = parseFloat((get_text_top_left/40)*100);
	document.getElementById('text_top_left').innerText = (get_SE.toFixed(1)+"%");

	var get_text_top_right = localStorage.getItem("countSD_storage");
	var get_SD = parseFloat((get_text_top_right/40)*100);
	document.getElementById('text_top_right').innerText = (get_SD.toFixed(1)+"%");

	var get_text_bottom_left = localStorage.getItem("countIE_storage");
	var get_IE = parseFloat((get_text_bottom_left/40)*100);
	document.getElementById('text_bottom_left').innerText = (get_IE.toFixed(1)+"%");
	
	var get_text_bottom_right = localStorage.getItem("countID_storage");
	var get_ID = parseFloat((get_text_bottom_right/40)*100);
	document.getElementById('text_bottom_right').innerText = (get_ID.toFixed(1)+"%");
}

//INÍCIO ENQUETES ==================================================

	//função para habilitar ou desabilitar o campo texto do item "Outro"
	function habilitar_texto(){

		var outro = document.getElementById('customRadio_other');		
		if (outro.checked==true){
			//alert('outro marcado');	
			document.getElementById('outro_nome_text').disabled = false;
		} else {
			document.getElementById('outro_nome_text').disabled = true;
		}

	}



	//capturar dados da pesquisa via ajax
	$(document).ready(function(){
		//alert('documento carregado');
		/*
		$('#btn_teste').on('click', function(){
			alert('clicque');
		});
		*/

		

		$('#btnEnviar_enquete').submit(function(){
			//alert('submit');
			var settings = {
			async: true,//diz se a requisição é assincrona ou não
			data: null,//o corpo da requisição
			method: 'GET',//método de envio da requisição
			error: function(){alert('erro');},//callback erro
			sucess: function(){alert('sucesso');},//callback sucesso
			}

			var dados = $('#form_enquete').serializeArray();
			settings.data = dados;

			$.ajax('/clientes', settings)
			});
	});


//FIM ENQUETES ==================================================