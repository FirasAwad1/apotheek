<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete recept</title>
</head>

<body>
    <?php require_once "../navbar.php" ?>
    <div class="container mt-40 absolute">
        <div class="w-full max-w-xs grid place-items-center m-auto">
            <?php
            require "recepten-class.php";

            $receptid = $_POST["receptid"];
            $verwijderen = $_POST["verwijderBox"];

            if ($verwijderen == "ja") {
                echo "De recept is verwijderd <br/>";
                $recept1 = new Recept();
                $recept1->deleterecept($receptid);
            } else {
                echo "De recept is niet verwijderd <br/>";
            }


            ?>
        </div>
    </div>
</body>

</html>