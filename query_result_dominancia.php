<?php
/*
@ receive data form DominanciaCerebral.html

@Gefor TI
Author: Max Pinheiro
Version: 1.0
Year 2018 ,
*/	
 	//create super global of session
 	session_start();

	//call to the database file Dominancia
	require_once('databasetestmind_result.php');

	//receive data from form variables - form "form_consult_result" - data users
	$receive_userCode = $_POST['userCode'];
	
	//test receive
	//echo ($receive_userCode);

	$sql = "SELECT userName, userCode, management, countSD, countSE, countID, countIE FROM questions_mind_new WHERE userCode = '$receive_userCode'";

	$objDB = new db;
	$link = $objDB->conecta_banco();

	$resultado_userCode = mysqli_query($link, $sql);

	if ($resultado_userCode) {
		//recebe os dados da consulta e transforma em um array
		$dados_userCode = mysqli_fetch_array($resultado_userCode);

		if (isset($dados_userCode['userCode'])) {
			//echo "Usuário existente!";
			$_SESSION['userName'] = $dados_userCode['userName'];
			$_SESSION['userCode'] = $dados_userCode['userCode'];
			$_SESSION['management'] = $dados_userCode['management'];
			$_SESSION['countSD'] = $dados_userCode['countSD'];
			$_SESSION['countSE'] = $dados_userCode['countSE'];
			$_SESSION['countID'] = $dados_userCode['countID'];
			$_SESSION['countIE'] = $dados_userCode['countIE'];
			
			//view result
			/*
			echo ($_SESSION['userName']);
			echo ($_SESSION['userCode']);
			echo ($_SESSION['management']);
			echo ($_SESSION['countSD']);
			echo ($_SESSION['countSE']);
			echo ($_SESSION['countID']);
			echo ($_SESSION['countIE']);
			*/

			header('Location: http://disec.bb.com.br/geforti/consult_result.php');	

		} else{
			header('Location: http://disec.bb.com.br/geforti/consultar_resultado.php?nao_localizado=1');	
		}
	} else {
		echo "Erro na execução da consulta, favor entrar emcontato com o admin!";
	}
	
	//acessa o array de acordo com o índice
	//echo "Participante: " . $dados_userCode["userName"];

?>