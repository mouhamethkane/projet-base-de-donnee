<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <?php
    $titreheader = "Home";
    include('include/header.php');
    ?>
    <?php
    include('include/nav.php');
    ?>
    <?php
    $paragraphe = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.
    Ipsa ducimus ratione veritatis, consequuntur, fugiat minus 
    pariatur error inventore iste suscipit tenetur dolore
     libero laboriosam earum voluptate rerum dolores modi consequatur!';
    include('include/article.php');
    ?>
    <?php
    include('include/footer.php');
    ?>
</body>
</html>