<!--
@Author Max Pinheiro
Version 2018.1
Gefor TI

Arquivo para apresentação do resultado do teste HBDI, após o usuário enviar suas respostas!
-->

<?php
	
	session_start();
	//killer variables of session	
	($_SESSION['userName']);
	($_SESSION['userCode_teste']);
	($_SESSION['management']);
	($_SESSION['countSD']);
	($_SESSION['countSE']);
	($_SESSION['countID']);
	($_SESSION['countIE']);



?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Consultar Resultado Dominância Cerebral</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="estilotestedominancia.css" />

	
<!--INÍCIO DO JS--> 
<script type="text/javascript">
  //function for include values from query
    function values_query_result(){
      var user_name = "<?php echo $_SESSION['userCode'];?>";
      document.querySelector('#userCode').value = user_name;
      //alert(user_name);
      //alert('teste');

      var top_left = "<?php echo $_SESSION['countSE'];?>";
      var top_left_fixed = ((top_left)/40)*100;
      top_left_fixed1 = top_left_fixed.toFixed(1);
      document.querySelector("#text_top_left").innerText = (top_left_fixed1)+'%';

      var top_right = "<?php echo $_SESSION['countSD'];?>";
      var top_right_fixed = ((top_right)/40)*100;
      top_right_fixed1 = top_right_fixed.toFixed(1);
      document.querySelector("#text_top_right").innerText = (top_right_fixed1)+'%';

      var bottom_left = "<?php echo $_SESSION['countIE'];?>";
      var bottom_left_fixed = ((bottom_left)/40)*100;
      bottom_left_fixed1 = bottom_left_fixed.toFixed(1);
      document.querySelector("#text_bottom_left").innerText = (bottom_left_fixed1)+'%';

      var bottom_right = "<?php echo $_SESSION['countID'];?>";
      var bottom_right_fixed = ((bottom_right)/40)*100;
      bottom_right_fixed1 = bottom_right_fixed.toFixed(1);
      document.querySelector("#text_bottom_right").innerText = (bottom_right_fixed1)+'%';

      //bigger value
      let bigger = Math.max(top_left_fixed1, top_right_fixed1, bottom_left_fixed1, bottom_right_fixed1);

      //change font-size of bigger value
      if (bigger == top_left_fixed1) {
      document.querySelector("#text_top_left").style.fontSize = '100px';
      }

      if (bigger == top_right_fixed1) {
        document.querySelector("#text_top_right").style.fontSize = '100px';
      }

      if (bigger==bottom_left_fixed1) {
        document.querySelector("#text_bottom_left").style.fontSize = '100px'; 
      }

      if (bigger==bottom_right_fixed1) {
        document.querySelector("#text_bottom_right").style.fontSize = '100px';  
      }
      //sort values
      /*function sort_values(a, b){
        return (a - b);

      }

      var sort_result = [top_left, top_right, bottom_left, bottom_right];
      sort_result.sort(sort_values);
    */
    }
</script>
  <!--FIM DO JS-->  
	

</head>

<body onload="get_name_storage()">

  <!--BEGIN NAV BAR-->
   <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container headerquest">
      	
      		<h2 class="font">Design Thinking</h2>
      	
      	<div><img src="img/forum.png"></div>
      	
      </div>
      
      <div id="defaultlogo">
      	Gefor TI
      </div>
      
   </nav>
  <!--END NAV BAR-->

   <div class="topo container ">
   		<div class="card bg-dark text-white">
   			<div class="card-body"><h3>Teste de Dominância Cerebral (HBDI) - Registro Efetuado!</h3></div>
  		</div>

  	<div class="shadow p-4 mb-4 bg-white headerId">
  		<div>
  			<p>
			   	<h2 style="text-align: center;">Obrigado <span style="font-weight: bold;" class="color_blue" id="span_name_resultado"></span> por participar do teste de <span style="font-weight: bold">Dominância Cerebral (HBDI).</span></h2>
			   	
			</p>
  		</div>

  		<div class="container headerId">
		
			<form id="form_consult_result" name="form_consult_result" method="post" action="query_result_dominancia.php">
			  <div class="row container" id="writeId">
			<!--  <label class="labelId color_blue">Matrícula:</label> -->
			    <div class="col">
			      <!--<input type="text" class="form-control color_blue" placeholder="Informe a matrícula" required="" name="userCode" maxlength="8" id="userCode">-->
			    </div>
			    <div class="col">
			     <!-- <button id="btn_consult_result" class="btn btn-primary" type="" form="form_consult_result" onclick="valide_key()">Consultar</button>-->
			    </div>
			    <div class="col">
			      <a href="https://intranet.bb.com.br" class="btn btn-outline-primary" id="btn_clear_consult">Sair</a>
			    </div>
			  </div>
	  		</form>
    	</div>
	</div>



		<!--BEGIN DIV VIEW RESULT-->
		<div class="DivViewResult shadow p-4 mb-4 bg-white" id="Id_div_result" style="visibility: visible;">
			<div>
				<h2 id="title_result">Resultado: <?= ($_SESSION['userName']);?></h2>
			</div>
			<div class="row container">
				<div class="col">
				<!--	<label class="labelId">Nome:<span><?= $_SESSION['userName']; ?></span></label> -->
				<!--	<input type="text" class="form-control" name="Result_userName" id="Result_userName" size="50"> -->
				</div>
				<div class="col">
				<!--	<label class="labelId">Gerência:<span><?= $_SESSION['management']; ?></span></label> -->
				<!--	<input type="text" class="form-control" name="Result_management" id="Result_userName" size="50">-->
				</div>
			</div>

	<hr>
			<div id="img_view_hbdi">
				<span id="text_top_left"><!--superior esquerdo--><?=((($_SESSION['countSE'])/40)*100); echo "%";?></span> <span id="text_top_right"><!--superior direito--><?=((($_SESSION['countSD'])/40)*100); echo "%";?></span>
				<img src="img/hbdinovo.jpg" class="hbdiXnew mx-auto d-block img-fluid">
				<span id="text_bottom_left"><!--inferior esquerdo--><?= ((($_SESSION['countIE'])/40)*100); echo "%";?></span> <span id="text_bottom_right"><!--inferior direito--><?=((($_SESSION['countID'])/40)*100); echo "%";?></span>
			</div>

		</div>
		<!--END DIV VIEW RESULT-->
   </div>





<!--BEGIN FOOTER-->
	<div class="NewFooter">
		@Prospecção de Novas Tecnologias
	</div>
<!--END FOOTER-->




<script src="braintestform.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>