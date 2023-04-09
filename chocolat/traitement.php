<?php
include('config.php');
// calcul du totale a payer
$total = $_POST['quantite'] * TARIF;
// calcul du nouveau totale a payer
$newTotal = $total - REMISE;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Traitement</title>
</head>
<body>
    <div>
        <h1>Merci pour votre commande</h1>
        <ul>
            <li>Nombre de boite commander: <?= $_POST['quantite']; ?></li>
            <li>Tarif unitair: <?= TARIF; ?>euros</li>
            <li>Totale a payer: <?= $total; ?> euros</li>
            <li>Remise: <?= REMISE; ?></li>
            <li><strong>Nouveau Totale:</strong> <?= $newTotal; ?> euros</li>
            <li><a href="index.php">Lien vert la page index</a></li>
        </ul>
    </div>
</body>
</html>