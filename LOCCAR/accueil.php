<?php require_once('connexion.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loccar_style.css" type="text/css">
    <title>Document</title>
    <style>
        .myphoto {
            width:50px;height: 50px;border-radius: 50px;border: 1px solid;
        }
    </style>
</head>
<body>
    <div id="globale">
        <div id="profile">
            <?php
            session_start();
            echo "Bonjour et Bienvenue  ".$_SESSION['monlogin']. "<br>";
            $req="select * from utilisateur where login='".$_SESSION['txtlogin']."'";
            $resultat=mysqli_query($cnloccar,$req);
            $ligne=mysqli_fetch_assoc($resultat);
            ?>
            <img src="<?php echo $ligne['my_photo'];?>" class="myphoto">
            <br>
            <a href="deconnecter.php">Deconnection</a>
        </div>
        <div id="tableaubord">
        <?php include("tableaubord.php") ?>
        </div>
    </div>
</body>
</html>