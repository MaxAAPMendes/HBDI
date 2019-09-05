<?php
	
	session_start();
	//killer variables of session	
	unset($_SESSION['userName']);
	unset($_SESSION['userCode']);
	unset($_SESSION['management']);
	unset($_SESSION['countSD']);
	unset($_SESSION['countSE']);
	unset($_SESSION['countID']);
	unset($_SESSION['countIE']);

	$nao_localizado = isset($_GET['nao_localizado']) ? $_GET['nao_localizado'] : 0;

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
  
</script>
  <!--FIM DO JS-->	
	

</head>

<body>

	<?php
		echo "<script>
		if ('$nao_localizado'==1){alert('Não consta registro de teste HBDI para a matrícula informada!');}
		</script>";
	?>

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
   			<div class="card-body"><h3>Teste de Dominância Cerebral (HBDI) - Consultar Resultado</h3></div>
  		</div>

  	<div class="shadow p-4 mb-4 bg-white headerId">
  		<div>
  			<p>
			   	Para consultar o resultado do teste de <span style="font-weight: bold">Dominância Cerebral (HBDI)</span> de um participante informe a matrícula e clique em "Consultar"!
			</p>
  		</div>

  		<div class="container headerId">
		
			<form id="form_consult_result" name="form_consult_result" method="post" action="query_result_dominancia.php">
			  <div class="row container" id="writeId">
			  <label class="labelId color_blue">Matrícula:</label>
			    <div class="col">
			      <input type="text" class="form-control color_blue" placeholder="Informe a matrícula" required="" name="userCode" maxlength="8" id="userCode">
			    </div>
			    <div class="col">
			      <button id="btn_consult_result" class="btn btn-primary" type="" form="form_consult_result" onclick="valide_key()">Consultar</button>
			    </div>
			    <div class="col">
			      <a href="consultar_resultado.php" class="btn btn-outline-primary" id="btn_clear_consult">Limpar</a>
			    </div>
			  </div>
	  		</form>
    	</div>
	</div>



		<!--BEGIN DIV VIEW RESULT-->
		<div class="DivViewResult shadow p-4 mb-4 bg-white" id="Id_div_result" style="visibility: hidden;">
			<div>
				<h2 id="title_result">Resultado:</h2>
			</div>
			<div class="row container">
				<div class="col">
					<label class="labelId">Nome:</label>
					<input type="text" class="form-control" name="Result_userName" id="Result_userName" size="50">
				</div>
				<div class="col">
					<label class="labelId">Gerência:</label>
					<input type="text" class="form-control" name="Result_management" id="Result_userName" size="50">
				</div>
			</div>

			<div id="img_view_hbdi">
				<img src="img/hbdinovo.jpg" class="hbdiXnew mx-auto d-block img-fluid">
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