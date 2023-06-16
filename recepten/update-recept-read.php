<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Recept Formulier</title>
</head>

<body>
    <?php require_once "../navbar.php" ?>
    <?php

    require "recepten-class.php";
    $receptid = $_POST["receptid"];
    $recept1 = new Recept();
    $recept1->searchrecept($receptid);
    // Get property values
    $receptnaam = $recept1->getreceptnaam();
    $dokternaam = $recept1->getdokternaam();
    $mediId = $recept1->getmediId();
    $klantid = $recept1->getklantid();
    ?>

    <div class="w-full max-w-xs grid h-screen place-items-center m-auto">
        <form class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-56" action="update-recept-function-uitvoeren.php" method="post">
            <?php echo $receptid ?>
            <input type="hidden" name="receptid" value="<?php echo $receptid;  ?> "><br/>
            <label class="block text-gray-700 text-sm font-bold mb-2" for="verwijderBox">Receptnaam</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="receptnaam" value="<?php echo $receptnaam; ?> "><br />

            <label class="block text-gray-700 text-sm font-bold mb-2" for="verwijderBox">Naam van de dokter</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="dokternaam" value="<?php echo $dokternaam; ?> "><br />
            
            <label class="block text-gray-700 text-sm font-bold mb-2" for="verwijderBox">Medecijn Id</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="mediId" value="<?php echo $mediId; ?> "><br /><br />

            <label class="block text-gray-700 text-sm font-bold mb-2" for="verwijderBox">Klant Id</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="klantid" value="<?php echo $klantid; ?> "><br /><br />
            <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-20" type="submit" value="Update" type="submit"><br /><br />
        </form>
    </div>
</body>

</html>
