<?php
require 'database.php';

$sql = "SELECT * FROM japan WHERE duur = (SELECT MAX(duur) FROM japan);";

$result = mysqli_query($conn, $sql);

$Duur = mysqli_fetch_assoc($result);


$sql = "SELECT * FROM japan WHERE moeilijkheidsgraat = '1'";

$result = mysqli_query($conn, $sql);

$makkelijk = mysqli_fetch_assoc($result);

$sql = "SELECT * FROM japan WHERE aantal_ingredienten = (SELECT MAX(aantal_ingredienten) FROM japan)";

$result = mysqli_query($conn, $sql);

$aantal_ingredienten = mysqli_fetch_assoc($result);
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
    <div class="speciaal">
        <div class="">
            <h2><?php echo $makkelijk["aantal_ingredienten"] ?></h2>
        </div>
    </div>
    <?php include 'footer.php'; ?>

</body>

</html>