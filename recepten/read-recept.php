<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recept read</title>
</head>

<body>
    <?php require_once "../navbar.php" ?>
    <div class="container mt-40 absolute">
        <div class="w-full max-w-xs grid place-items-center m-auto">
            <?php
            require "recepten-class.php"; // nodig om object te maken
            $klant1 = new Recept();
            $klant1->readrecept();
            ?>
        </div>
    </div>
</body>

</html>