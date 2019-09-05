<?php
/*
@ receive data form DominanciaCerebral.html

@Gefor TI
Author: Max Pinheiro
Version: 1.0
Year 2018 
*/
	//call to the database file Dominancia
	require_once('databasetestmind.php');

	//receive data from form variables - form "identification" - data users
	$receive_userName = $_POST['userName'];
	$receive_userCode = $_POST['userCode_teste'];
	$receive_management = $_POST['management'];
	$receive_totalSD = $_POST['totalSD'];
	$receive_totalSE = $_POST['totalSE'];
	$receive_totalID = $_POST['totalID'];
	$receive_totalIE = $_POST['totalIE'];

	
	session_start();
	//begin session variables	
	$_SESSION['userName'] = $receive_userName;
	$_SESSION['userCode_teste'] = $receive_userCode;
	$_SESSION['management'] = $receive_management;
	$_SESSION['countSD'] = $receive_totalSD;
	$_SESSION['countSE'] = $receive_totalSE;
	$_SESSION['countID'] = $receive_totalID;
	$_SESSION['countIE'] = $receive_totalIE;


	//test receive
	/*echo ($receive_userName);
	echo ($receive_userCode);
	echo ($receive_management);
	echo ($receive_totalSD);
	echo ($receive_totalSE);
	echo ($receive_totalID);
	echo ($receive_totalIE);*/


	if (($receive_totalSD)==0 && ($receive_totalSE)==0 && ($receive_totalID)==0 && ($receive_totalIE==0)) {
		echo "<script>
		      alert('Erro na execução! Refaça o teste! Caso o problema persista atualize seu navegador!');
		</script>";
	} else {
		//instância da classe db - arquivo databasetestmind.php
		$objDB = new db;
		$link = $objDB->conecta_banco();//acessa a função conecta_banco()


		//consulta a existência de cadastro para a chave userCode
		//$userCode_existe = false;
		$sql ="select userCode from questions_mind_new where userCode = '$receive_userCode'";

		//$resultado = mysqli_query($link, $sql);
		//$dados = mysqli_fetch_array($resultado);
		//echo $dados['userCode'];
		//die();


		if ($resultado = mysqli_query($link, $sql)) {
			$dados = mysqli_fetch_array($resultado);

			if (($dados['userCode']==ucfirst($receive_userCode)) || ($dados['userCode']==$receive_userCode)) {
				//echo "usuário existe!";
				header('Location: dominanciaCerebral.php?erro_userCode=1&matricula='.$receive_userCode);
				die();//interrompe todo o restante do script

			} else {
				//executa o registro na base 
				$sql = "INSERT INTO questions_mind_new (userName, userCode, management, countSD, countSE, countID, countIE) VALUES ('$receive_userName', '$receive_userCode', '$receive_management', '$receive_totalSD', '$receive_totalSE', '$receive_totalID', '$receive_totalIE');";

				mysqli_query($link, $sql);
				header("Location: http://disec.bb.com.br/geforti/teste_registro.php");
			}

		} else {
			echo "Erro de conexão com a base de dados! Tente novamente!";
		}
	}
	
		
		

		/*
		//executa o registro na base 
		$sql = "insert into questions_mind (userName, userCode, management, countSD, countSE, countID, countIE) values ('$receive_userName', '$receive_userCode', '$receive_management', '$receive_totalSD', '$receive_totalSE', '$receive_totalID', '$receive_totalIE');";

		mysqli_query($link, $sql);

		*/
	
		

?>