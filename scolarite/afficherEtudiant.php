<?php
//onnexion au serveur de BD et choix de la base
$conn = mysqli_connect('localhost', 'root', '', 'BB_SCO');
$requete = "select * from ETUDIANTS";
//execution de la requete SQL
$resultats = mysqli_query($conn, $requete) or die(mysqli_error());
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="affichage">
    <p><a href="saisieEtudiant.html">Lien vert la formulaire d'ajoute</a></p>
    <p><a href="chercherEtudiant.php">Lien vert la page de recherche d'etudiant</a></p>
    <table border="1" width="50%">
        <tr>
            <td>CODE</td>
            <td>NOM</td>
            <td>PHOTO</td>
            <td>SUPPRIMER</td>
            <td>EDITER</td>
            
        </tr>
        <?php while($ETUDIANTS = mysqli_fetch_assoc($resultats)){?>
            <tr>
                <td><?php echo($ETUDIANTS['CODE'])?></td>
                <td><?php echo($ETUDIANTS['NOM'])?></td>
                <td><img src="images/<?php echo($ETUDIANTS['PHOTO'])?>"></td>
                <td><a href="supprimerEtudiant.php?code=<?php echo($ETUDIANTS['CODE'])?>">Supprimer</td>
                <td><a href="editerEtudiant.php?code=<?php echo($ETUDIANTS['CODE'])?>">Editer</td>
            </tr>
        <?php } ?>    
    </table>
    </div>
</body>
</html>