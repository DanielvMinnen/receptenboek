<?php
require 'database.php';

//de sql query
$sql = "SELECT * From japan";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);

$recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Document</title>
</head>

<body>
    <?Php include 'nav.php'; ?>
        <div class="div2">
            <h1 class="h11">welkom</h1>
            <h1 class="h11">いらっしゃいませ</h1>
        </div>
    



    <?php include 'footer.php'; ?>
</body>

</html>