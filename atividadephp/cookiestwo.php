<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Testando se o cookie foi definido</title>
</head>
<body>
<?php



if (isset($_COOKIE['Pedro'])){

echo "Bem vindo " .$_COOKIE["Pedro"] . "! <br>";

}
else{

	echo "usuario novo seja bem vindo!<br>";
}











  ?>
</body>
</html>