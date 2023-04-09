<?php
$conn = mysqli_connect("localhost", "root", "", "BB_SCO") or die(mysql_error());
// mysqli_select_db("BB_SCO",$conn) or die(mysql_error());
$code=$_POST['code'];
$nom=$_POST['nom'];
$email=$_POST['email'];
$nomPhoto=$_FILES['photo']['name'];
$file_tmp_name=$_FILES['photo']['tmp_name'];
move_uploaded_file($file_tmp_name,"./images/$nomPhoto");
$req="update ETUDIANTS set NOM='$nom',EMAIL='$email',PHOTO='nomPhoto' where CODE=$code";
mysqli_query($conn,$req) or die(mysql_error());
header("location:afficherEtudiant.php");
//require_once("location:afficherEtudiant.php");
?>