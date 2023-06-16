<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../main.css">
    <title>Document</title>
</head>

<body>



    <?php require_once "../navbar.php"; ?>
    <div class="container mt-40 absolute">
        <div class="w-full max-w-xs grid  place-items-center m-auto">

            <?php
            require_once('medicijnen-class.php'); // Inclusief de Artikel-klasse
            require "../database/apotheek-database.php"; // Inclusief de database-configuratie
            

            $mediId = $_POST["mediId"];

            // Maak een object van de medicijn-klasse
            $medicijn = new Medicijn();

            // Roep de searchStudent-functie aan
            $medicijn->searchMedicijn($mediId);
            $medicijn->afdrukkenMedicijn($mediId);
            ?>

        </div>
    </div>







</body>

</html>