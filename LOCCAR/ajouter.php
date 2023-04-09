<?php require_once('connexion.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loccar_style.css" type="text/css">
    <title>Document</title>
</head>
<body>
  <div class="container">
      <form name="formAdd" action="" method="post" class="formulaire" enctype="multipart/form-data">
        <h2 align="center">Ajouter nouvelle voiture...</h2>
        <label><b>Immatriculation :</b></label>
        <input type="text" name="textImm" class="zonetext" placeholder="Entre Immatriculation" required>

        <label><b>Marque :</b></label>
        <input type="text" name="textMarque" class="zonetext" placeholder="Entre la Marque" required>

        <label><b>Prix de Location :</b></label>
        <input type="number" name="textPl" class="zonetext" placeholder="Entre le prix unitaire" required>

        <label><b>Photo :</b></label>
        <input type="file" name="textPhoto" class="zonetext" placeholder="Choisir une image" required>

        <input type="submit" name="btAdd" value="Ajouter" class="submit">

        <p><a href="accueil.php" class="submit">Tableau de bord</a></p>
        <label style="text-align: center; color: #960406">
        <?php
        if(isset($_POST['btAdd']))
        {
            $imm=$_POST['textImm'];
            $marque=$_POST['textMarque'];
            $prixloc=$_POST['textPl'];
            $image=$_FILES['textPhoto']['tmp_name'];
            $traget="image/".$_FILES['textPhoto']['name'];
            move_uploaded_file($image,$traget);
            $reqAdd="INSERT INTO automobile(IMM,MARQUE,PRIX_LOC,PHOTO) VALUES('$imm','$marque','$prixloc','$traget'";
            $resultat=mysqli_query($cnloccar,$reqAdd);
            if($resultat)
            {
                echo "Insertion des donnees valudes";
            }
            else
            {
                echo "Echec d'insertion des donnees";
            }
        }
        ?>
    </label>
      </form>
  </div>  
</body>
</html>