<?php
session_start();

$invii = $_SESSION['invii'] ?? 0;
$voti = $_SESSION['voti'] ?? [];
$ultimaData = $_SESSION['ultima_data'] ?? "";

$mediaVoti = !empty($voti) ? array_sum($voti) / count($voti) : 0;
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Risultati delle Recensioni</title>
</head>
<body>
    <h1>Risultati delle Recensioni</h1>
    
    <table border="1">
        <tr>
            <th>Numero di Invii</th>
            <th>Ultima Data</th>
        </tr>
        <tr>
            <td><?= htmlspecialchars($invii) ?></td>
            <td><?= htmlspecialchars($ultimaData) ?></td>
        </tr>
    </table>
    
    <h3>Lista dei Voti:</h3>
    <ul>
        <?php foreach ($voti as $voto): ?>
            <li><?= htmlspecialchars($voto) ?></li>
        <?php endforeach; ?>
    </ul>
    
    <h3>Media Attuale delle Recensioni: <?= number_format($mediaVoti, 2) ?></h3>
    
    <br>
    <a href="presentazione.html">Torna alla pagina di inserimento</a>
</body>
</html>
