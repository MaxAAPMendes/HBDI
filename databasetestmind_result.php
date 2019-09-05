<?php

	/**
	* 
	*/
	class db
	{

			//host
		private $host = "localhost";
			//usuário do bd
		private $usuario = "root";
			//senha de acesso ao bd
		private $senha = "";
			//nome da base
		private $basedados = "testmind";
		
		public function conecta_banco()
		{


			//mysqli_connect conecta a base de dados 
			$conexao = mysqli_connect($this->host,$this->usuario,$this->senha,$this->basedados);
			//ajusta a cadeia de caracteres
			mysqli_set_charset($conexao,'utf8');

			//verifica se houve erro na conexao
			if (mysqli_connect_errno()) {
				echo "Erro ao tentar conectar ao banco de dados!".mysqli_connect_error();
			} else{
				echo "Pesquisa concluída com sucesso!";
				//echo"<script type='text/javascript'>";
				//echo "alert('Obrigado por sua participação!!');";
				//echo "</script>";

				//header("Location: https://intranet.bb.com.br");

			}

			return $conexao;

		}
	}


?>