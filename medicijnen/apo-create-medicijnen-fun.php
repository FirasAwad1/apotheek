<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Create medicijn</title>
</head>

<body>
<?php require "../navbar.php" ?>
    <div class="container mt-40 absolute">
        <div class="w-full max-w-xs grid  place-items-center m-auto">

            <h1 class="text-white text-2xl">create medicijn</h1>
            <?php
            require_once "medicijnen-class.php";


            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Maak een nieuw Medicijn object aan en roep de create functie aan.
                $medicijn = new Medicijn(NULL, $_POST['mediNaam'], $_POST['mediHovelheid'], $_POST['mediPrijs'], $_POST['mediBeschrijving']);
                $medicijn->create();
            }
            ?>
        </div>
    </div>
</body>

</html>