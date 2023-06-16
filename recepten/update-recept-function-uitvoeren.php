<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Recept Uitgevoerd</title>
</head>

<body>
    <?php require_once "../navbar.php" ?>
    <div class="container mt-40 absolute">
        <div class="w-full max-w-xs grid place-items-center m-auto">
            <?php
            require "recepten-class.php";

            // Retrieve data from the form
            $receptid = $_POST["receptid"];
            $receptnaam = $_POST["receptnaam"];
            $dokternaam = $_POST["dokternaam"];
            $mediId = $_POST["mediId"];
            $klantid = $_POST["klantid"];

            // Create a new Recept object
            $recept1 = new Recept($receptid, $receptnaam, $dokternaam, $mediId, $klantid);

            // Update the Recept in the database
            $recept1->updaterecept($receptid);

            echo '<div class="text-lg uppercase">These are the updated details:</div><br/>';
            echo $receptid . "<br/>";
            $recept1->afrukkenrecept(); // Display the updated Recept object
            ?>
        </div>
    </div>
</body>

</html>
