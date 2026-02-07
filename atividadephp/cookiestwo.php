<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Status do Cookie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <?php
    if (isset($_COOKIE['voto'])) {
        echo "<p>Você já votou!<br>Voto registrado: <strong>{$_COOKIE['voto']}</strong></p>";
    } else {
        echo "<p>Você ainda não votou.</p>";
    }
    ?>
    <a href="index.php">Voltar</a>
</div>

</body>
</html>
