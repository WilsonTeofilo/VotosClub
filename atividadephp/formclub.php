<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Melhores Clubes</title>
</head>
<body>
<form action="votoclub.php" method="post">

	 <h2>Clubes do Brasil</h2>

	<label>Selecione o melhor time da capital</label> <br> <br>
	<select name="times" required>
			<option value="Santos"> Santos</option>
			<option value="Corinthias"> Corinthias</option>
			<option value="Palmeiras"> Palmeiras</option>
			<option value="São Paulo"> São Paulo</option>

	</select>
	<br><br>
<button type="submit"> Enviar</button>

</form>

<form action="votoclub.php">
	 <h2>Formula 1</h2>

	 <label>Selecione a nmelhor equipe</label> <br>

	 <input type="radio" name="opcoes" value="Mercedes">
	 <label for="Mercedes">Mercedes</label>
	
	 <input type="radio" name="opcoes" value="McLaren">
	 <label for="McLaren">McLaren</label>
	 
	 <input type="radio" name="opcoes" value="Ferrari">
	 <label for="Ferrari">Ferrari</label>
	 
	 <br><br>

	 <button type "submit" >Enviar</button>
</form>

</body>
</html>