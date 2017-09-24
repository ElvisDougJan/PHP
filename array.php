<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>
		
		<?php 	

			$mensagem[0] = "Mensagem1</br>";
			$mensagem[1] = "Mensagem2</br>";
			$mensagem[2] = "Mensagem3</br>";

			print_r($mensagem);

			$mensagem2 = array (

					0 => 'mensagem array 0</br>',
					1 => 'mensagem array 1</br>',
					2 => 'mensagem array 2</br>',
			);

			print_r($mensagem2);


			//Array bidimensional
		$array[1][1] = "Array linha 1, coluna 1</br>";
		$array[1][2] = "Array linha 1, coluna 2</br>";
		$array[1][3] = "Array linha 1, coluna 3 </br>";
		$array[2][1]= "Array linha 2, coluna 1</br>";
		$array[2][2]= "Array linha 2, coluna 2</br>";
		$array[2][3]= "Array linha 2, coluna 3</br>";
			
			var_dump($array);
			echo ("</br>");
			print_r($array);
			echo ("</br></br></br>");

		//array bidimensional
		$array2 = array (

			1, 1 => "Array linha 1, coluna 1</br>",
			1, 2 => "Array linha 1, coluna 2</br>",
			1, 3 => "Array linha 1, coluna 3</br>",

		);

		var_dump($array2);

		?>
	</body>
</html>