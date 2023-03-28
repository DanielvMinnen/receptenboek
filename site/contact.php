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

<div class="container">
    <form action="http://127.0.0.1:5500/email.html">
  
      <label for="Voornaam">Voornaam</label>
      <input type="text" id="Voornaam" name="Voornaam" placeholder="Uw voornaam..">
  
      <label for="Achternaam">Achternaam</label>
      <input type="text" id="Achternaam" name="Achternaam" placeholder="Uw achternaam..">

      <label for="Email">Email</label>
      <input type="text" id="Email" name="Email" placeholder="Uw Emailadres">

      <label for="Telefoonnummer">Telefoonnummer</label>
      <input type="text" id="Telefoonnummer" name="Telefoonnummer" placeholder="+0612345678">
  
      <input type="submit" value="Submit">
    </form>
  </div>

<?php include 'footer.php'; ?>
</body>
</html>