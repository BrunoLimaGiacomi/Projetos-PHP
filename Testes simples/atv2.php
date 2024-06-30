<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Tempo</title>
</head>
<body>
    <h1>Conversor de Tempo</h1>
    <form method="post" action="">
        <label for="segundos">Digite o valor em segundos:</label><br>
        <input type="number" id="segundos" name="segundos" required><br><br>
        <input type="submit" value="Converter">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $segundos = intval($_POST["segundos"]);

        $meses = intdiv($segundos, 2592000); // 1 mês = 30 dias = 30 * 24 * 60 * 60 = 2592000 segundos
        $segundos %= 2592000;

        $semanas = intdiv($segundos, 604800); // 1 semana = 7 dias = 7 * 24 * 60 * 60 = 604800 segundos
        $segundos %= 604800;

        $dias = intdiv($segundos, 86400); // 1 dia = 24 * 60 * 60 = 86400 segundos
        $segundos %= 86400;

        $horas = intdiv($segundos, 3600); // 1 hora = 60 * 60 = 3600 segundos
        $segundos %= 3600;

        $minutos = intdiv($segundos, 60); // 1 minuto = 60 segundos
        $segundos %= 60;

        echo "<p>Meses: $meses</p>";
        echo "<p>Semanas: $semanas</p>";
        echo "<p>Dias: $dias</p>";
        echo "<p>Horas: $horas</p>";
        echo "<p>Minutos: $minutos</p>";
        echo "<p>Segundos: $segundos</p>";
    }
    ?>
</body>
</html>
