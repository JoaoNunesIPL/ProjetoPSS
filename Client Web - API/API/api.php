<?php
	header('Content-Type: text/html; charset=utf-8');

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		print_r ($_POST);
		echo ("../db/".$_POST["nome"]."/valor.txt");


		if(isset($_POST["valor"]) && isset($_POST["nome"]) && isset($_POST["hora"])){
			
			file_put_contents ("../db/".$_POST["nome"]."/valor.txt", $_POST["valor"]);

			file_put_contents ("../db/".$_POST["nome"]."/hora.txt", $_POST["hora"]);

			file_put_contents ("../db/".$_POST["nome"]."/log.txt", $_POST["hora"].";".$_POST["valor"] .PHP_EOL, FILE_APPEND);

			}
		else {
			http_response_code(403);
			echo('{"erro": "Os parametros recebidos nao sao validos!"}' .PHP_EOL);

			exit();	
			}
		}
	else if ($_SERVER["REQUEST_METHOD"] == "GET") {
		if (isset($_GET["nome"])){
			//$homepage = file_get_contents('../db/'.$_GET["nome"].'/valor.txt');
			//echo $homepage;
				
			}
		else{
			http_response_code(404);
			}
		}

?>