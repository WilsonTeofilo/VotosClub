<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Votação de Clubes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Vote no melhor clube</h2>

    <form action="votoclub.php" method="post">
        <label>Escolha um time:</label><br>

        <select name="voto" required>
            <option value="">-- Selecione --</option>
            <option value="Santos">Santos</option>
            <option value="Corinthians">Corinthians</option>
            <option value="Palmeiras">Palmeiras</option>
            <option value="São Paulo">São Paulo</option>
        </select>

        <input type="submit" value="Votar">
    </form>

    <a href="cookiestwo.php">Ver status do voto</a>
</div>

</body>
</html>
