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

            $receptid = NULL; // komt niet uit het formulier (auto increment)
			$receptnaam = $_POST["receptnaam"];
			$dokternaam = $_POST["dokternaam"];
			$mediid = $_POST["mediId"];
			$klantid = $_POST["klantid"];


            $receot1= new Recept(NULL, $_POST['receptnaam'], $_POST['dokternaam'], $_POST['mediId'], $_POST['klantid']);
            $receot1-> createrecept();

            ?>
        </div>
    </div>
</body>

</html>