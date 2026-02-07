<?php
if (!isset($_POST['voto'])) {
    echo "Voto inválido.";
    exit;
}

$voto = $_POST['voto'];

header("Location: cookie.php?voto=$voto");
exit;
