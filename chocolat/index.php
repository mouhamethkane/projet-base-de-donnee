<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>commande</title>
</head>
<body>
    <div>
        <form action="traitement.php" method="post">
            <label for="quantite"> Quantite:</label>
            <select name="quantite" id="quantite">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <p>Tarif: 20 euros</p>
            <p class="orangered">En commandant maintenant, vous aurez droit une remise immediate de 5 euros.</p>
            <p>
               <input type="submit" value="Commander"> 
            </p>
        </form>
        <img src="images/chocolat.jpg" alt="Chocolat">
    </div>
</body>
</html>