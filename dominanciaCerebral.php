<?php
  $erro_userCode = isset($_GET['erro_userCode']) ? $_GET['erro_userCode'] : 0;
  $matricula = $_GET['matricula'];
?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Teste Dominância Cerebral</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="estilotestedominancia.css" />

	
<!--INÍCIO DO JS-->	
<!--<script type="text/javascript"></script>--> 

<script type="text/javascript" src="braintestform.js">
  
</script>
  <!--FIM DO JS-->	
	

</head>

<body>

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


  <!--BEGIN FORM HBDI-->
<!--BEGIN ID="FORM_VISIBLE"-->  
<div id="form_visible" style="visibility: visible;">
   <div class="container">
    <main role="main" class="container">
      <div class="topo container">
        <h1>Me Conhecendo Melhor</h1>
        <h4 style="text-align: center;">Reserve alguns minutos pra você...</h4>
        <p class="lead">Responda com muita sinceridade! Não tente "acertar" as respostas que parecem mais "adequadas" ou "socialmente corretas". Para não distorcer o resultado, procure ser bem verdadeiro e escolher a resposta mais adequada "para você"!</p>
        
      </div>
    </main>
   </div>
<hr>
    <div class="container">
		
		<form id="identification" name="identification" method="post" action="dominancia.php">
		  <div class="row container" id="writeId">
		  <label class="labelId">Participante:</label>
		    <div class="col">
		      <input type="text" class="form-control" placeholder="Nome" required="" name="userName" maxlength="50" id="userName">
		    </div>
		    <div class="col">
		      <input type="text" class="form-control" placeholder="Matrícula Ex: F0000000" required="" name="userCode_teste" id="userCode_teste" maxlength="8" onblur="valide_key()">
		    </div>
		    <div class="col">
		      <input type="text" class="form-control" placeholder="Prefixo da Gerência" required="" name="management" maxlength="4">
		    </div>
		  </div>
      <input type="" name="totalSD" id="totalSD" class="viewinput">
      <input type="" name="totalSE" id="totalSE" class="viewinput">
      <input type="" name="totalID" id="totalID" class="viewinput">
      <input type="" name="totalIE" id="totalIE" class="viewinput">
	   </form>
    </div>
<hr>
<!--CONTENT************************************************************-->
    <div class="container">
  <form id="questions" method="" action="">
<!--BEGIN QUESTION ONE-->
    		<div class="container shadow-sm p-4 mb-3 bg-white rounded" id="firsQuestion">
    			<h4>1. Marque os <span>CINCO</span> sentidos ou situações que fazem você se sentir mais motivado no trabalho:</h4>
    			<div class="row">
    				<div class="col">
    					<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck1.1" name="customCheck1_1" value="SE">
  							<label class="custom-control-label" for="customCheck1.1">Trabalhar sozinho</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck1.2" name="customCheck1_2" value="ID">
  							<label class="custom-control-label" for="customCheck1.2">Expressar minhas ideias</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck1.3" name="customCheck1_3" value="IE">
  							<label class="custom-control-label" for="customCheck1.3">Estar no controle da situação</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck1.4" name="customCheck1_4" value="SD">
  							<label class="custom-control-label" for="customCheck1.4">Provocar mudanças</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck1.5" name="customCheck1_5" value="ID">
  							<label class="custom-control-label" for="customCheck1.5">Ouvir e falar</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck1.6" name="customCheck1_6" value="SD">
  							<label class="custom-control-label" for="customCheck1.6">Criar ou usar recursos visuais</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck1.7" name="customCheck1_7" value="IE">
  							<label class="custom-control-label" for="customCheck1.7">Prestar atenção aos detalhes</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck1.8" name="customCheck1_8" value="SE">
  							<label class="custom-control-label" for="customCheck1.8">Aspectos técnicos</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck1.9" name="customCheck1_9" value="ID">
  							<label class="custom-control-label" for="customCheck1.9">Trabalhar com pessoas</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck1.10" name="customCheck1_10" value="SE">
  							<label class="custom-control-label" for="customCheck1.10">Usar números, estatísticas</label>
  						</div>
    				</div>

    				<div class="col">
    					<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck1.11" name="customCheck1_11" value="SD">
  							<label class="custom-control-label" for="customCheck1.11">Oportunidade para fazer experiências</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck1.12" name="customCheck1_12" value="IE">
  							<label class="custom-control-label" for="customCheck1.12">Planejar</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck1.13" name="customCheck1_13" value="ID">
  							<label class="custom-control-label" for="customCheck1.13">Trabalhar com comunicação</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck1.14" name="customCheck1_14" value="SE">
  							<label class="custom-control-label" for="customCheck1.14">Fazer algo funcionar</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck1.15" name="customCheck1_15" value="SD">
  							<label class="custom-control-label" for="customCheck1.15">Arriscar-se</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck1.16" name="customCheck1_16" value="SE">
  							<label class="custom-control-label" for="customCheck1.16">Analisar dados</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck1.17" name="customCheck1_17" value="SD">
  							<label class="custom-control-label" for="customCheck1.17">Lidar com o futuro</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck1.18" name="customCheck1_18" value="IE">
  							<label class="custom-control-label" for="customCheck1.18">Produzir e organizar</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck1.19" name="customCheck1_19" value="ID">
  							<label class="custom-control-label" for="customCheck1.19">Fazer parte de uma equipe</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck1.20" name="customCheck1_20" value="IE">
  							<label class="custom-control-label" for="customCheck1.20">Fazer as coisas sempre no prazo previsto</label>
  						</div>


    				</div>
    			</div>
    		</div>
<!--END QUESTION ONE--> 		

<!--BEGIN QUESTION TWO-->
    		<div class="container shadow-sm p-4 mb-3 bg-white rounded">
    			<h4>2. Quando aprendo, gosto de... (assinale <span>CINCO</span> alternativas):</h4>
    			<div class="row">
    				<div class="col">
    					<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck2.1" name="customCheck2_1" value="IE">
  							<label class="custom-control-label" for="customCheck2.1">Avaliar e testar teorias</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck2.2" name="customCheck2_2" value="SE">
  							<label class="custom-control-label" for="customCheck2.2">Obter e quantificar fatos</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck2.3" name="customCheck2_3" value="ID">
  							<label class="custom-control-label" for="customCheck2.3">Ouvir e compartilhar ideias</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck2.4" name="customCheck2_4" value="SD">
  							<label class="custom-control-label" for="customCheck2.4">Usar minha imaginação</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck2.5" name="customCheck2_5" value="SE">
  							<label class="custom-control-label" for="customCheck2.5">Aplicar análise e lógica</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck2.6" name="customCheck2_6" value="SD">
  							<label class="custom-control-label" for="customCheck2.6">Ambiente bem informal</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck2.7" name="customCheck2_7" value="IE">
  							<label class="custom-control-label" for="customCheck2.7">Verificar meu entendimento</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck2.8" name="customCheck2_8" value="ID">
  							<label class="custom-control-label" for="customCheck2.8">Fazer experiências práticas</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck2.9" name="customCheck2_9" value="SE">
  							<label class="custom-control-label" for="customCheck2.9">Pensar sobre as ideias</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck2.10" name="customCheck2_10" value="ID">
  							<label class="custom-control-label" for="customCheck2.10">Confiar nas intuições</label>
  						</div>
    				</div>

    				<div class="col">
    					<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck2.11" name="customCheck2_11" value="IE">
  							<label class="custom-control-label" for="customCheck2.11">Receber informações passoa a passo</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck2.12" name="customCheck2_12" value="SD">
  							<label class="custom-control-label" for="customCheck2.12">Tomar iniciativas</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck2.13" name="customCheck2_13" value="IE">
  							<label class="custom-control-label" for="customCheck2.13">Elaborar teorias</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck2.14" name="customCheck2_14" value="ID">
  							<label class="custom-control-label" for="customCheck2.14">Envolvimento emocional</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck2.15" name="customCheck2_15" value="ID">
  							<label class="custom-control-label" for="customCheck2.15">Trabalhar em grupo</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck2.16" name="customCheck2_16" value="IE">
  							<label class="custom-control-label" for="customCheck2.16">Orientações claras</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck2.17" name="customCheck2_17" value="SD">
  							<label class="custom-control-label" for="customCheck2.17">Fazer descobertas</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck2.18" name="customCheck2_18" value="SE">
  							<label class="custom-control-label" for="customCheck2.18">Criticar</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck2.19" name="customCheck2_19" value="SD">
  							<label class="custom-control-label" for="customCheck2.19">Perceber logo o quadro geral(o objetivo final)</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck2.20" name="customCheck2_20" value="IE">
  							<label class="custom-control-label" for="customCheck2.20">Adquirir habilidades pela prática</label>
  						</div>


    				</div>
    			</div>
    		</div>    		
<!--END QUESTION TWO-->

<!--BEGIN QUESTION THREE-->

    		<div class="container shadow-sm p-4 mb-3 bg-white rounded">
    			<h4>3. Prefiro aprender através de... (assinale <span>CINCO</span> alternativas):</h4>
    			<div class="row">
    				<div class="col">
    					<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck3.1" name="customCheck3_1" value="SD">
  							<label class="custom-control-label" for="customCheck3.1">Materiais visuais</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck3.2" name="customCheck3_2" value="ID">
  							<label class="custom-control-label" for="customCheck3.2">Demonstrações</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck3.3" name="customCheck3_3" value="IE">
  							<label class="custom-control-label" for="customCheck3.3">Debates estruturados pelo instrutor</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck3.4" name="customCheck3_4" value="SE">
  							<label class="custom-control-label" for="customCheck3.4">Palestras formais</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck3.5" name="customCheck3_5" value="SD">
  							<label class="custom-control-label" for="customCheck3.5">Experiências</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck3.6" name="customCheck3_6" value="ID">
  							<label class="custom-control-label" for="customCheck3.6">Utilizando histórias e música</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck3.7" name="customCheck3_7" value="ID">
  							<label class="custom-control-label" for="customCheck3.7">Exercícios que usam a intuição</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck3.8" name="customCheck3_8" value="SD">
  							<label class="custom-control-label" for="customCheck3.8">Debate em grupo</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck3.9" name="customCheck3_9" value="SE">
  							<label class="custom-control-label" for="customCheck3.9">Exercícios de análise</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck3.10" name="customCheck3_10" value="IE">
  							<label class="custom-control-label" for="customCheck3.10">Atividades sequenciais bem planejadas</label>
  						</div>
    				</div>

    				<div class="col">
    					<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck3.11" name="customCheck3_11" value="SE">
  							<label class="custom-control-label" for="customCheck3.11">Analisando números, dados e fatos</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck3.12" name="customCheck3_12" value="SD">
  							<label class="custom-control-label" for="customCheck3.12">Exemplos com metáforas</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck3.13" value="IE">
  							<label class="custom-control-label" for="customCheck3.13">Atividades passo a passo de reforço do conteúdo</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck3.14" name="customCheck3_14" value="IE">
  							<label class="custom-control-label" for="customCheck3.14">Leituras de livros-textos</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck3.15" name="customCheck3_15" value="ID">
  							<label class="custom-control-label" for="customCheck3.15">Discussões de casos voltados para as pessoas</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck3.16" name="customCheck3_16" value="SE">
  							<label class="custom-control-label" for="customCheck3.16">Discussões de casos voltados para os números e fatos</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck3.17" name="customCheck3_17" value="IE">
  							<label class="custom-control-label" for="customCheck3.17">Métodos tradicionais comprovados</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck3.18" name="customCheck3_18" value="SD">
  							<label class="custom-control-label" for="customCheck3.18">Agenda bem flexível</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck3.19" name="customCheck3_19" value="SE">
  							<label class="custom-control-label" for="customCheck3.19">Agenda estruturada com antecedência</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck3.20" name="customCheck3_20" value="ID"> 
  							<label class="custom-control-label" for="customCheck3.20">Trabalhos bem estruturados</label>
  						</div>


    				</div>
    			</div>
    		</div>
<!--END QUESTION THREE-->

<!--BEGIN QUESTION FOUR-->
			<div class="container shadow-sm p-4 mb-3 bg-white rounded">
    			<h4>4. Qual o tipo de pergunta que você mais gosta de fazer?</h4>
    			<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio4_1" name="question4" class="custom-control-input" required="" value="SE">
				  <label class="custom-control-label" for="customRadio4_1">O quê</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio4_2" name="question4" class="custom-control-input" value="IE">
				  <label class="custom-control-label" for="customRadio4_2">Como?</label>
				</div>
    			<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio4_3" name="question4" class="custom-control-input" value="SD">
				  <label class="custom-control-label" for="customRadio4_3">Porquê</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio4_4" name="question4" class="custom-control-input" value="ID">
				  <label class="custom-control-label" for="customRadio4_4">Quem?</label>
				</div>
    			
    		</div>

<!--END QUESTION FOUR-->

<!--BEGIN QUESTION FiVE-->

    		<div class="container shadow-sm p-4 mb-3 bg-white rounded">
    			<h4>5. Assinale o que mais você gosta de fazer (marque <span>QUATRO</span> alternativas): </h4>
    			<div class="row">
    				<div class="col">
    					<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck5.1" name="customCheck5_1" value="SD">
  							<label class="custom-control-label" for="customCheck5.1">Descobrir</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck5.2" name="customCheck5_2" value="SE">
  							<label class="custom-control-label" for="customCheck5.2">Quantificar</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck5.3" name="customCheck5_3" value="ID">
  							<label class="custom-control-label" for="customCheck5.3">Envolver</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck5.4" name="customCheck5_4" value="IE">
  							<label class="custom-control-label" for="customCheck5.4">Organizar</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck5.5" name="customCheck5_5" value="SD">
  							<label class="custom-control-label" for="customCheck5.5">Conceituar</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck5.6" name="customCheck5_6" value="SE">
  							<label class="custom-control-label" for="customCheck5.6">Analisar</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck5.7" name="customCheck5_7" value="ID">
  							<label class="custom-control-label" for="customCheck5.7">Sentir</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck5.8" name="customCheck5_8" value="IE">
  							<label class="custom-control-label" for="customCheck5.8">Praticar</label>
  						</div>

    				</div>

    				<div class="col">
    					<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck5.9" name="customCheck5_9" value="SE">
  							<label class="custom-control-label" for="customCheck5.9">Teorizar</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck5.10" name="customCheck5_10" value="SD">
  							<label class="custom-control-label" for="customCheck5.10">Sintetizar</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck5.11" name="customCheck5_11" value="IE">
  							<label class="custom-control-label" for="customCheck5.11">Avaliar</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck5.12" name="customCheck5_12" value="ID">
  							<label class="custom-control-label" for="customCheck5.12">Interiorizar</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck5.13" name="customCheck5_13" value="SE">
  							<label class="custom-control-label" for="customCheck5.13">Processar</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck5.14" name="customCheck5_14" value="IE">
  							<label class="custom-control-label" for="customCheck5.14">Ordenar</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck5.15" name="customCheck5_15" value="SD">
  							<label class="custom-control-label" for="customCheck5.15">Explorar</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck5.16" name="customCheck5_16" value="ID">
  							<label class="custom-control-label" for="customCheck5.16">Compartilhar</label>
  						</div>

    				</div>
    			</div>
    		</div>
<!--END QUESTION FIVE-->

<!--BEGIN QUESTION SIX-->
    		<div class="container shadow-sm p-4 mb-3 bg-white rounded">
    			<h4>6. Marque <span>CINCO</span> frases, que melhor definem seu comportamento ou atitude. Ao comprar um carro você:</h4>
    			<div class="row">
    				<div class="col">
    					<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck6.1" name="customCheck6_1" value="ID">
  							<label class="custom-control-label" for="customCheck6.1">Compra com base na recomendação de amigos</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck6.2" name="customCheck6_2" value="SE">
  							<label class="custom-control-label" for="customCheck6.2">Se preocupa com o consumo de combustível</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck6.3" name="customCheck6_3" value="SD">
  							<label class="custom-control-label" for="customCheck6.3">Se preocupa com as formas, a cor e a tecnologia</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck6.4" name="customCheck6_4" value="IE">
  							<label class="custom-control-label" for="customCheck6.4">Verifica equipamento de segurança e durabilidade</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck6.5" name="customCheck6_5" value="ID">
  							<label class="custom-control-label" for="customCheck6.5">Dá importância à "sensação" de conforto do veículo</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck6.6" name="customCheck6_6" value="SE">
  							<label class="custom-control-label" for="customCheck6.6">Faz comparações com outros veículos</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck6.7" name="customCheck6_7" value="IE">
  							<label class="custom-control-label" for="customCheck6.7">Verifica tamanho do porta malas</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck6.8" name="customCheck6_8" value="SD">
  							<label class="custom-control-label" for="customCheck6.8">Verifica se encaixa no seu sonho de vida</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck6.9" name="customCheck6_9" value="IE">
  							<label class="custom-control-label" for="customCheck6.9">Pesquisa e planeja antecipadamente como vai utilizá-lo</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck6.10" name="customCheck6_10" value="SE">
  							<label class="custom-control-label" for="customCheck6.10">Se preocupa com o custo e o valor de troca</label>
  						</div>
    				</div>

    				<div class="col">
    					<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck6.11" name="customCheck6_11" value="ID">
  							<label class="custom-control-label" for="customCheck6.11">Quer "amar" o carro</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck6.12" name="customCheck6_12" value="SD">
  							<label class="custom-control-label" for="customCheck6.12">Prefere carros lançados recentemente, novidades</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck6.13" name="customCheck6_13" value="IE">
  							<label class="custom-control-label" for="customCheck6.13">Se preocupa com os requisitos técnicos</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck6.14" name="customCheck6_14" value="SE">
  							<label class="custom-control-label" for="customCheck6.14">Verifica a facilidade de manutenção</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck6.15" name="customCheck6_15" value="SD">
  							<label class="custom-control-label" for="customCheck6.15">Gosta de experimentar um novo modelo ou fabricante</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck6.16" name="customCheck6_16" value="ID">
  							<label class="custom-control-label" for="customCheck6.16">Se preocupa com o nome do fabricante</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck6.17" name="customCheck6_17" value="SD">
  							<label class="custom-control-label" for="customCheck6.17">Dá importância à opinião das pessoas</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck6.18" name="customCheck6_18" value="SE">
  							<label class="custom-control-label" for="customCheck6.18">Quer ver dados e estatísticas sobre o desempenho</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck6.19" name="customCheck6_19" value="ID">
  							<label class="custom-control-label" for="customCheck6.19">Se preocupa com a qualidade do atendimento do revendedor</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck6.20" name="customCheck6_20" value="IE">
  							<label class="custom-control-label" for="customCheck6.20">Analisa como o carro vai ser útil no seu dia-a-dia</label>
  						</div>


    				</div>
    			</div>
    		</div>
<!--END QUESTION SIX-->

<!--BEGIN QUESTION SEVEN-->
			<div class="container shadow-sm p-4 mb-3 bg-white rounded">
    			<h4>7. Como você define seu comportamento?</h4>
    			<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio7_1" name="question7" class="custom-control-input" required="" value="IE">
				  <label class="custom-control-label" for="customRadio7_1">Gosto de organizar</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio7_2" name="question7" class="custom-control-input" value="ID">
				  <label class="custom-control-label" for="customRadio7_2">Gosto de compartilhar</label>
				</div>
    			<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio7_3" name="question7" class="custom-control-input" value="SE">
				  <label class="custom-control-label" for="customRadio7_3">Gosto de analisar</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio7_4" name="question7" class="custom-control-input" value="SD">
				  <label class="custom-control-label" for="customRadio7_4">Gosto de descobrir</label>
				</div>
    			
    		</div>
<!--END QUESTION SEVEN-->

<!--BEGIN QUESTION EIGHT-->
    		<div class="container shadow-sm p-4 mb-3 bg-white rounded">
    			<h4>8. Palavras que definem meu estilo (marque <span>QUATRO</span>):</h4>
    			<div class="row">
    				<div class="col">
    					<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck8.1" name="customCheck8_1" value="IE">
  							<label class="custom-control-label" for="customCheck8.1">Organizado</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck8.2" name="customCheck8_2" value="SE">
  							<label class="custom-control-label" for="customCheck8.2">Analítico</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck8.3" name="customCheck8_3" value="ID">
  							<label class="custom-control-label" for="customCheck8.3">Emocional</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck8.4" name="customCheck8_4" value="SD">
  							<label class="custom-control-label" for="customCheck8.4">Experimental</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck8.5" name="customCheck8_5" value="SE">
  							<label class="custom-control-label" for="customCheck8.5">Lógico</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck8.6" name="customCheck8_6" value="SD">
  							<label class="custom-control-label" for="customCheck8.6">Conceitual</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck8.7" name="customCheck8_7" value="ID">
  							<label class="custom-control-label" for="customCheck8.7">Perceptivo</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck8.8" name="customCheck8_8" value="IE">
  							<label class="custom-control-label" for="customCheck8.8">Sequencial</label>
  						</div>

    				</div>

    				<div class="col">
    					<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck8.9" name="customCheck8_9" value="SE">
  							<label class="custom-control-label" for="customCheck8.9">Teórico</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck8.10" name="customCheck8_10" value="SD">
  							<label class="custom-control-label" for="customCheck8.10">Explorador</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck8.11" name="customCheck8_11" value="IE">
  							<label class="custom-control-label" for="customCheck8.11">Avaliador</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck8.12" name="customCheck8_12" value="ID">
  							<label class="custom-control-label" for="customCheck8.12">Cinestésico</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck8.13" name="customCheck8_13" value="ID">
  							<label class="custom-control-label" for="customCheck8.13">Sentimental</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck8.14" name="customCheck8_14" value="IE">
  							<label class="custom-control-label" for="customCheck8.14">Preparado</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck8.15" name="customCheck8_15" value="SE">
  							<label class="custom-control-label" for="customCheck8.15">Quantitativo</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck8.16" name="customCheck8_16" value="SD">
  							<label class="custom-control-label" for="customCheck8.16">Sintético</label>
  						</div>

    				</div>
    			</div>
    		</div>
<!--END QUESTION EIGHT-->

<!--BEGIN QUESTION NINE-->
    		<div class="container shadow-sm p-4 mb-3 bg-white rounded">
    			<h4>9. Quais as frases depreciativas que você mais ouve os outros falarem a seu respeito? (Marque <span>CINCO</span> alternativas)</h4>
    			<div class="row">
    				<div class="col">
    					<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck9.1" name="customCheck9_1" value="SE">
  							<label class="custom-control-label" for="customCheck9.1">Viciado em números</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck9.2" name="customCheck9_2" value="ID">
  							<label class="custom-control-label" for="customCheck9.2">Coração mole</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck9.3" name="customCheck9_3" value="IE">
  							<label class="custom-control-label" for="customCheck9.3">Exigente, esforçado</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck9.4" name="customCheck9_4" value="SD">
  							<label class="custom-control-label" for="customCheck9.4">Vive no mundo da lua</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck9.5" name="customCheck9_5" value="SE">
  							<label class="custom-control-label" for="customCheck9.5">Tem sede de poder</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck9.6" name="customCheck9_6" value="ID">
  							<label class="custom-control-label" for="customCheck9.6">Fala demais</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck9.7" name="customCheck9_7" value="IE">
  							<label class="custom-control-label" for="customCheck9.7">Não decide sozinho</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck9.8" name="customCheck9_8" value="SD">
  							<label class="custom-control-label" for="customCheck9.8">Não sabe se concentrar</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck9.9" name="customCheck9_9" value="SE">
  							<label class="custom-control-label" for="customCheck9.9">Frio, insensível</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck9.10" name="customCheck9_10" value="ID">
  							<label class="custom-control-label" for="customCheck9.10">Fácil de convencer</label>
  						</div>
    				</div>

    				<div class="col">
    					<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck9.11" name="customCheck9_11" value="IE">
  							<label class="custom-control-label" for="customCheck9.11">Sem imaginação</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck9.12" name="customCheck9_12" value="SD">
  							<label class="custom-control-label" for="customCheck9.12">Maluco</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck9.13" name="customCheck9_13" value="SE">
  							<label class="custom-control-label" for="customCheck9.13">Calculista</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck9.14" name="customCheck9_14" value="ID">
  							<label class="custom-control-label" for="customCheck9.14">Ingênuo</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck9.15" name="customCheck9_15" value="IE">
  							<label class="custom-control-label" for="customCheck9.15">Bitolado</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck9.16" name="customCheck9_16" value="SD">
  							<label class="custom-control-label" for="customCheck9.16">Inconsequente</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck9.17" name="customCheck9_17" value="SE">
  							<label class="custom-control-label" for="customCheck9.17">Não se mistura</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck9.18" name="customCheck9_18" value="ID">
  							<label class="custom-control-label" for="customCheck9.18">Ultra-sensível</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck9.19" name="customCheck9_19" value="IE">
  							<label class="custom-control-label" for="customCheck9.19">Quadrado</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck9.20" name="customCheck9_20" value="SD">
  							<label class="custom-control-label" for="customCheck9.20">Sem disciplina</label>
  						</div>
    				</div>
    			</div>
    		</div>    		
<!--END QUESTION NINE-->

<!--BEGIN QUESTION TEN-->
			<div class="container shadow-sm p-4 mb-3 bg-white rounded">
    			<h4>10. Quando tenho que resolver um problema, eu geralmente...</h4>
    			<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio10_1" name="question10" class="custom-control-input" required="" value="SD">
				  <label class="custom-control-label" for="customRadio10_1">Visualizo os "fatos" tratando-os de forma intuitiva e holística</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio10_2" name="question10" class="custom-control-input" value="IE">
				  <label class="custom-control-label" for="customRadio10_2">Organizo os "fatos" tratando os detalhes de forma realista e cronológica</label>
				</div>
    			<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio10_3" name="question10" class="custom-control-input" value="ID">
				  <label class="custom-control-label" for="customRadio10_3">Sinto os "fatos" tratando-os de forma expressiva e interpessoal</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio10_4" name="question10" class="custom-control-input" value="SE">
				  <label class="custom-control-label" for="customRadio10_4">Analiso os "fatos" tratando-os de forma lógica e racional</label>
				</div>
    			
    		</div>

<!--END QUESTION TEN-->

<!--BEGIN QUESTION ELEVEN-->
			<div class="container shadow-sm p-4 mb-3 bg-white rounded">
    			<h4>11. Quando tenho que resolver um problema, eu procuro...</h4>
    			<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio11_1" name="question11" class="custom-control-input" required="" value="ID">
				  <label class="custom-control-label" for="customRadio11_1">Uma visão interpessoal, emocional "humana"</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio11_2" name="question11" class="custom-control-input" value="IE">
				  <label class="custom-control-label" for="customRadio11_2">Uma visão organizada, detalhada, "cronológica"</label>
				</div>
    			<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio11_3" name="question11" class="custom-control-input" value="SE">
				  <label class="custom-control-label" for="customRadio11_3">Uma visão analítica, lógica, racional, "de resultados"</label>
				</div>
				<div class="custom-control custom-radio">
				  <input type="radio" id="customRadio11_4" name="question11" class="custom-control-input" value="SD">
				  <label class="custom-control-label" for="customRadio11_4">Uma visão intuitiva, conceitual, visual, de "contexto geral"</label>
				</div>
    			
    		</div>
<!--END QUESTION ELEVEN-->

<!--BEGIN QUESTION TWELVE-->
    		<div class="container shadow-sm p-4 mb-3 bg-white rounded">
    			<h4>12. Quais as frases que mais se aproximam do que você diz? (marque <span>TRÊS</span>):</h4>
    			<div class="row">
    				<div class="col">
    					<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck12.1" name="customCheck12_1" value="IE">
  							<label class="custom-control-label" for="customCheck12.1">Sempre fazemos desta forma...</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck12.2" name="customCheck12_2" value="SE">
  							<label class="custom-control-label" for="customCheck12.2">Vamos ao ponto-chave do problema...</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck12.3" name="customCheck12_3" value="ID">
  							<label class="custom-control-label" for="customCheck12.3">Vejamos os valores humanos...</label>
  						</div>
  						
  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck12.4" name="customCheck12_4" value="SE">
  							<label class="custom-control-label" for="customCheck12.4">Vamos analisar...</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck12.5" name="customCheck12_5" value="SD">
  							<label class="custom-control-label" for="customCheck12.5">Vamos ver o quadro geral...</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck12.6" name="customCheck12_6" value="ID">
  							<label class="custom-control-label" for="customCheck12.6">Vamos ver o desenvolvimento de equipe...</label>
  						</div>

    				</div>

    				<div class="col">
    					<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck12.7" name="customCheck12_7" value="SE">
  							<label class="custom-control-label" for="customCheck12.7">Vamos conhecer o resultado...</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck12.8" name="customCheck12_8" value="SD">
  							<label class="custom-control-label" for="customCheck12.8">Este é o grande sucesso conceitual...</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck12.9" name="customCheck12_9" value="IE">
  							<label class="custom-control-label" for="customCheck12.9">Vamos manter a lei e a ordem...</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck12.10" name="customCheck12_10" value="SD">
  							<label class="custom-control-label" for="customCheck12.10">Vamos inovar e criar sinergia...</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck12.11" name="customCheck12_11" value="ID">
  							<label class="custom-control-label" for="customCheck12.11">Vamos participar e envolver...</label>
  						</div>

  						<div class="custom-control custom-checkbox">
  							<input type="checkbox" class="custom-control-input" id="customCheck12.12" name="customCheck12_12" value="IE">
  							<label class="custom-control-label" for="customCheck12.12">É mais seguro desta forma...</label>
  						</div>
    				</div>
    			</div>
    		</div>
<!--END QUESTION TWELVE-->



    	</form>


<!--BEGIN BOTTOM SEND-->
  <div class="container workitbtnsend" style="display: inline;">
    <button id="btnEnviar" type="" class="btn btn-outline-primary" form="identification" onmouseover="countCheck(); valide_key_send(); set_name_storage()" onclick="valide_key_send(); set_name_storage()">Enviar Respostas</button>
    
  </div>
<!--END BOTTOM SEND-->	


<!-- Button trigger modal -->
<!-- button for view result
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onmouseover="countCheck()" onclick="view_result()">
  Consultar Resultado
</button>
-->


<!-- BEGIN Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Resultado Teste Dominância - <span id="spanNameUser" style="color: blue; font-weight: bold;" ></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body" style="background-image: url('img/hbdinovo.jpg'); background-repeat: no-repeat; background-size: 100%; height: 500px;">
        
        <div class="row">
          <div class="col-md-6" style="height: 50%; font-size: 70px; color: rgb(38, 138, 226, 0.5);"><span  id="SE"></span></div>
          <div class="col-md-6" style="height: 50%; font-size: 70px; color: rgb(226, 220, 38, 0.5);  text-align: right;"><span  id="SD"></span></div>
        </div>
        
        <div class="row" style="margin-top: 10%">
          <div class="col-md-6" style="height: 50%; font-size: 70px; color: rgb(38, 226, 126, 0.5);"><span id="IE"></span></div>
          <div class="col-md-6" style="height: 50%; font-size: 70px; color: rgb(226, 38, 44, 0.5); text-align: right;"><span id="ID"></span></div>
        </div>


      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
        <!--<button type="button" class="btn btn-primary">Enviar Respostas</button>-->
      </div>
    </div>
  </div>
</div>
<!-- END Modal --> 


    </div>
</div>
<!--END ID="FORM VISIBLE"-->
  <!--END FORM HBDI-->
<?php
  
  if ($erro_userCode==1) {
    echo "<script>
            
            alert('Já consta registro do teste para a matrícula ' + '$matricula');
          </script>";
  }
?>



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