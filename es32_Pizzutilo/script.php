<?php
session_start();

if (!isset($_SESSION['invii'])) {
    $_SESSION['invii'] = 0;
    $_SESSION['voti'] = [];
    $_SESSION['ultima_data'] = "";
}

$data = isset($_POST['data']) ? $_POST['data'] : "";
$voto = isset($_POST['voto']) ? (int)$_POST['voto'] : "";

if ($data && $voto) {
    $_SESSION['invii']++;             
    $_SESSION['voti'][] = $voto;      
    $_SESSION['ultima_data'] = $data; 
    }

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Conferma Recensione</title>
</head>
<body>
    <h1>Recensione Inviata</h1>
    
    <p><strong>Data della recensione:</strong> <?= htmlspecialchars($data) ?></p>
    <p><strong>Voto:</strong> <?= htmlspecialchars($voto) ?></p>
    
    <br>
    <a href="presentazione.html">Torna alla pagina di inserimento</a>
</body>
</html>