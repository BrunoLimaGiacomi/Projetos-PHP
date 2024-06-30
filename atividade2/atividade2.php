<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$numero = $_POST["numero"];
	if (!is_numeric($numero)) {
		echo "Valor digitado: $numero <br>";
		echo "Por favor, digite um número válido!";
		exit;
	}
	if ($numero % 2 == 0) {
		echo "Valor digitado: $numero <br>";
		echo "O número digitado: $numero é par!";
	} else {
		echo "Valor digitado: $numero <br>";
		echo "O número digitado: $numero é ímpar!";
	}
}
?>