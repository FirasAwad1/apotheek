<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Searhe klant</title>
</head>

<body>
<?php require "../navbar.php" ?>

    <div class="container mt-40 absolute">
        <div class="w-full max-w-xs grid place-items-center m-auto">
            <?php
            require "klant.php";



            $klantid = $_POST["klantid"];
            $klant1 = new Klant();
            $klant1->searchKlant($klantid);
            $klant1->afdrukkenKlant();
            ?>
        </div>
    </div>
</body>

</html>