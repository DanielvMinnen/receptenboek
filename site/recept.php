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
        <h2><?php echo $recept["naam_gerecht"] ?></h2>
        <h3>Ingrediënten</h3>
        <p><?php echo $recept["ingredienten"] ?></p>
        <h3>beschrijving</h3>
        <p><?php echo $recept["beschrijving"] ?></p>
        <h3>bereidindstijd</h3>
        <p><?php echo $recept["bereidingstijd"] ?></p>
        <h3>aantal personen</h3>
        <p><?php echo $recept["aantal_personen"] ?></p>
        <h3>smaak</h3>
        <p><?php echo $recept["smaak"] ?></p>

    </div>

    <?php include 'footer.php'; ?>
</body>

</html>