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
    <?php require_once "../navbar.php" ?>
    <div class="container mt-40 absolute">
        <div class="w-full max-w-xs grid  place-items-center m-auto">
    <?php

    require "../database/apotheek-database.php";
    require_once "medicijnen-class.php";

    if (isset($_POST['mediId'])) {
        // Haal het medicijn-ID op uit het formulier
        $mediId = $_POST['mediId'];

        // Maak een nieuw medicijn-object met het medicijn-ID
        $medicijn = new Medicijn();

    
        global $conn;
        $medicijnen = $conn->prepare("
SELECT mediId, mediNaam, mediHovelheid, mediPrijs, mediBeschrijving
FROM medicijnen
WHERE mediId = :mediId
");
        $medicijnen->execute(["mediId" => $mediId]);

        //medicijngegevens in een nieuw formulier laten zien
        echo "<form class='bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-56 form' action='apo-update-medicijn-uitvoeren.php' method='post'>";

        foreach ($medicijnen as $medicijn) {
            // medicijn mag niet gewijzigd worden
            echo "mediId: <input type='text' ";
            echo "name='mediId'";
            echo "value= '" . $medicijn["mediId"] . " '";
            echo " > <br />";

            echo "mediNaam: <input class='shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' action='bas-update-medicijn3.php' type='text' ";
            echo "name='mediNaam'";
            echo "value= '" . $medicijn["mediNaam"] . "' ";
            echo " > <br />";

            echo "mediHovelheid: <input class='shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='text' ";
            echo "name='mediHovelheid'";
            echo "value= '" . $medicijn["mediHovelheid"] . "' ";
            echo " > <br />";

            echo "mediPrijs: <input class='shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='text'";
            echo "name='mediPrijs'";
            echo "value= '" . $medicijn["mediPrijs"] . "' ";
            echo " > <br />";

            echo "mediBeschrijving: <input class='shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='text' ";
            echo "name='mediBeschrijving'";
            echo "value= '" . $medicijn["mediBeschrijving"] . "' ";
            echo " > <br />";

        }
        echo "<input class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-20' type='submit' name='submit_button' value='Verzenden'>";
        echo "</form>";
        echo "</div>";


        exit();
    }
    ?>