<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>about</title>
</head>
<body>
    <?php
    $titreheader = "about";
    include('include/header.php');
    ?>
    <?php
    include('include/nav.php');
    ?>
   
    <?php
    $paragraphe = "« Amour Chéri, tu es pour moi le plus beau de la vie et le plus noble de la terre.
    Je t'aime pour tout ce que tu es pour moi, pour tout ce que tu sais m'écrire,
     pour la façon dont tu peux agir et comme j'aime infiniment ta beauté,
      ton corps, tes gestes, ta voix, et tout ce qui paraît de toi. »";
    include('include/article.php');
    ?>
    <?php
    include('include/footer.php');
    ?>
</body>
</html>