<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>update klant fomulier</title>
</head>

<body>
    <?php require "../navbar.php" ?>

    <?php

    require "klant.php";
    $klantid = $_POST["klantid"];
    $klant1 = new Klant();
    $klant1->searchKlant($klantid);
    // properties in variabelen zetten
    $klantnaam = $klant1->getklantnaam();
    $klantemail = $klant1->getklantemail();
    $klantadres = $klant1->getklantadres();
    $klantpostcode = $klant1->getklantpostcode();
    $klantwoonplaats = $klant1->getklantwoonplaats();
    ?>

    <div class="w-full max-w-xs grid h-screen place-items-center m-auto">
        <form class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-56" action="update-function-uitvoeren.php"
            method="post">
            <?php echo $klantid ?>
            <input type="hidden" name="klantid" value="<?php echo $klantid; ?> "><br />
            <label class="block text-gray-700 text-sm font-bold mb-2" for="klantnaam">
                klantnaam
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" name="klantnaam" value="<?php echo $klantnaam; ?> "><br />
            <label class="block text-gray-700 text-sm font-bold mb-2" for="klantemail">klantemail:</label>

            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" name="klantemail" value="<?php echo $klantemail; ?> "><br />
            <label class="block text-gray-700 text-sm font-bold mb-2" for="klantadres">klantadres:</label>

            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" name="klantadres" value="<?php echo $klantadres; ?> "><br /><br />
            <label class="block text-gray-700 text-sm font-bold mb-2" for="klantpostcode">klantpostcode:</label>

            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" name="klantpostcode" value="<?php echo $klantpostcode; ?> "><br /><br />
            <label class="block text-gray-700 text-sm font-bold mb-2" for="klantwoonplaats">klantwoonplaats:</label>

            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" name="klantwoonplaats" value="<?php echo $klantwoonplaats; ?> "><br /><br />
            <input
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-20"
                type="submit" value="zoeken" type="submit"><br /><br />
        </form>
    </div>
</body>

</html>