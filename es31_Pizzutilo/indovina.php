<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Risultato</title>
</head>
<body>
<?php
    session_start();

    if (!isset($_SESSION['tentativi'])) $_SESSION['tentativi'] = 0;
    if (!isset($_SESSION['indovinati'])) $_SESSION['indovinati'] = 0;


    $numeroCasuale = rand(1, 20);
    $numeroUtente = isset($_GET['numero']) ? (int)$_GET['numero'] : null;

    $risultato = "";
    if ($numeroUtente !== null) {
        $_SESSION['tentativi']++; 
        if ($numeroUtente === $numeroCasuale) {
            $_SESSION['indovinati']++; 
            $risultato = "Complimenti! Hai indovinato il numero.";
        } else {
            $risultato = "Peccato! Il numero corretto era $numeroCasuale.";
        }
    }
    ?>


    <h1>Risultato</h1>
    <p><?= $risultato ?></p>
    <p>Numero scelto: <?= $numeroUtente ?></p>
    <p>Numero generato: <?= $numeroCasuale ?></p>
    <p>Tentativi totali: <?= $_SESSION['tentativi'] ?></p>
    <p>Indovinati: <?= $_SESSION['indovinati'] ?></p>
    <a href="scelta.html">Prova di nuovo</a>

</body>
</html>
