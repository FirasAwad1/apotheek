<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>update klant uitgevoerd</title>
</head>

<body>
<?php require "../navbar.php" ?>

    <div class="container mt-40 absolute">
        <div class="w-full max-w-xs grid place-items-center m-auto">
            <?php
            require "klant.php";

            // gegevens uit de array in variabelen stoppen
            $klantid = $_POST["klantid"];
            $klantnaam = $_POST["klantnaam"];
            $klantemail = $_POST["klantemail"];
            $klantadres = $_POST["klantadres"];
            $klantpostcode = $_POST["klantpostcode"];
            $klantwoonplaats = $_POST["klantwoonplaats"];

            // maken object ---------------------------------------------------
            $klant1 = new Klant($klantid, $klantnaam, $klantemail, $klantadres, $klantpostcode, $klantwoonplaats); // maakt object
            $klant1->updateKlant($klantid); // vervangt de tabelgegevens voor objectgegevens
            echo '<div class="text-lg uppercase">Dit zijn de gewijzigde gegevens:</div><br/>';
            echo $klantid . "<br/>";
            $klant1->afdrukkenklant(); // drukt object af
            
            ?>
        </div>
    </div>
</body>

</html>