<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create artikelen</title>
</head>
<body>
<?php require_once "navbar.php" ?>
<form class="form" method="post" action="bas-create-medicijnen2.php">
  <label for="klantid">klantid:</label>
  <input type="text" id="klantid" name="klantid"><br>

  <label for="mediNaam">mediNaam :</label>
  <input id="mediNaam" name="mediNaam"></input><br>

  <label for="mediHovelheid">mediHovelheid:</label>
  <input type="text" id="mediHovelheid" name="mediHovelheid"><br>

  <label for="mediPrijs">mediPrijs:</label>
  <input type="text" id="mediPrijs" name="mediPrijs"><br>

  <label for="mediBeschrijving">mediBeschrijving:</label>
  <input type="text" id="mediBeschrijving" name="mediBeschrijving"><br>


  <input type="submit" value="Toevoegen">
</form>

</body>
</html>