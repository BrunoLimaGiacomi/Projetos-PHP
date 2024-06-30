<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$numero = $_POST["numero"];
	if ($numero % 3 == 0 && $numero % 7 == 0) {
		echo "Valor digitado: $numero <br>";
		echo "É múltiplo de 3 e 7 ao mesmo tempo";
	} else {
		echo "Valor digitado: $numero <br>";
		echo "Não é múltiplo de 3 e 7 ao mesmo tempo";
	}
}
?>