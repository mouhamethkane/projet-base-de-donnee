<?php
$conn = mysqli_connect("localhost", "root", "", "BB_SCO") or die(mysql_error());
// mysqli_select_db("BB_SCO",$conn) or die(mysql_error());
$nom=$_POST['nom'];
$email=$_POST['email'];
$nomPhoto=$_FILES['photo']['name'];
$file_tmp_name=$_FILES['photo']['tmp_name'];
move_uploaded_file($file_tmp_name,"./images/$nomPhoto");

$req= "insert into ETUDIANTS(NOM,EMAIL,PHOTO) values('$nom','$email','$nomPhoto')";
mysqli_query($conn,$req) or(die(mysql_error($conn)));
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
    <div class="ajouter">
    <table border="1">
        <tr>
            <td>Nom:</td>
            <td><?php echo ($nom)?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo ($email)?></td>
        </tr>
        <tr>
            <td>Photo:</td>
            <td><img src="images/<?php echo ($nomPhoto)?>"></td>
        </tr>
    </table>
    <p><a href="afficherEtudiant.php">Lien vert la liste des etudiants</a></p>
    </div>
</body>
</html>