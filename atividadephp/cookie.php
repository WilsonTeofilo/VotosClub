<?php 
$value = 'aluno';

setcookie("ocupado", $value);

setcookie("ocupado", $value, time()+60);

echo "salve";


 ?>