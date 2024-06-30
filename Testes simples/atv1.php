<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Vogais</title>
</head>
<body>
    <h1>Contador de Vogais</h1>
    <form method="post" action="">
        <label for="frase">Digite uma frase:</label><br>
        <input type="text" id="frase" name="frase"><br><br>
        <input type="submit" value="Contar Vogais">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $frase = $_POST["frase"];
        $vogais = preg_match_all('/[aeiouAEIOU]/', $frase);
        echo "<p>O número de vogais na frase é: $vogais</p>";
    }
    ?>
</body>
</html>
