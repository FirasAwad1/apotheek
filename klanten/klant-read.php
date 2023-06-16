<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>klant read</title>
</head>
<body>
<?php require "../navbar.php" ?>
    <div class="container mt-40 absolute">
        <div class="w-full max-w-xs grid place-items-center m-auto">
            <?php
            require "klant.php"; // nodig om object te maken
            $klant1 = new Klant();
            $klant1->readklant();  // readklant function oproepen
            ?>
        </div>
    </div>
</body>

</html>