<?php
    require_once("connexion.php");
    $code=$_GET['code'];
    $req="select * from ETUDIANTS where CODE=$code";
    $rs=mysqli_query($conn,$req) or die(mysqli_error());
    $ETUDIANTS=mysqli_fetch_assoc($rs);
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
    <div class="editer">
    <form method="post" action="modifierEtudiant.php" enctype="multipart/form-data">
        <table>
            <tr> 
                <td>CODE:</td>
                <td><input type="text" name="code" value="<?php echo ($ETUDIANTS['CODE'])?>"></td>
            </tr>
            <tr>
                <td>Nom:</td>
                <td><input type="text" name="nom" value="<?php echo ($ETUDIANTS['NOM'])?>"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" value="<?php echo ($ETUDIANTS['EMAIL'])?>"></td>
            </tr>
            <tr>
                <td>Photo:</td>
                <img src="images/<?php echo($ETUDIANTS['PHOTO'])?>">
                <td><input type="file" name="photo" ></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Enregistrer"></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>
<!-- <?php
    //mysql_free_result($rs);
    //mysql_close($conn);
?> -->