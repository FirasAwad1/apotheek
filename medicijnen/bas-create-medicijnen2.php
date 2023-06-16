<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create medicijn</title>
</head>
<body>
<?php
require_once "medicijnen-class.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Maak een nieuw Verkooporder object aan en roep de create functie aan.
    $medicijn = new Verkooporder(NULL, $_POST['klantid'], $_POST['mediNaam'], $_POST['mediHovelheid'], $_POST['mediPrijs'], $_POST['mediBeschrijving']);
    $medicijn->create();
}
?>

</body>
</html>
