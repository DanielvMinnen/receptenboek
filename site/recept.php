<?php
require 'database.php';

$ID = $_GET["id"];

//de sql query
$sql = "SELECT * FROM japan where ID = $ID";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

$recept = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>
    <?Php include 'nav.php'; ?>

    <div class="foto1">
        <img src=" <?php echo $recept["foto"] ?>">
    </div>
    <div class="naam">
        <h2><?php echo $recept["titel"] ?></h2>
        <h3>Ingrediënten</h3>
        <p><?php echo $recept["aantal_ingredienten"] ?></p>
        <h3>beschrijving</h3>
        <p><?php echo $recept["beschrijving"] ?></p>
        <h3>bereidindstijd</h3>
        <p><?php echo $recept["duur"] ?></p>
        <h3>aantal personen</h3>
        <p><?php echo $recept["aantal_personen"] ?></p>
        <h3>smaak</h3>
        <p><?php echo $recept["smaak"] ?></p>
        <h3>moeilijkheidsgraat</h3>
        <p><?php echo $recept["moeilijkheidsgraat"] ?></p>
        <h3>menugang</h3>
        <p><?php echo $recept["menugang"] ?></p>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>