<?php
$voto = $_GET['voto'] ?? null;

if (!$voto) {
    echo "Nenhum voto recebido.";
    exit;
}

if (!isset($_COOKIE['voto'])) {
    setcookie("voto", $voto, time() + (3600 * 24 * 30));
    $mensagem = "Obrigado por votar! Seu voto foi: $voto";
} else {
    $mensagem = "Você já votou! Seu voto foi: " . $_COOKIE['voto'];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <p><?= $mensagem ?></p>
    <a href="index.php">Voltar</a>
</div>

</body>
</html>
