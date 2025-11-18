<?php 
$_voto = $_GET['voto'];

if (!isset($_COOKIE['voto'])) {

	setcookie("voto", $voto, time()+3600*24*31);

	$msg = "obirgado por votar!";
}
else{

	$msg = "você ja votou uma vez"; 

}

echo $msg;


 ?>