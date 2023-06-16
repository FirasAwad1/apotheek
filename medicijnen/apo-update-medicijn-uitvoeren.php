<?php require_once "../navbar.php"; ?>
<div class="container mt-40 absolute">
    <div class="w-full max-w-xs grid  place-items-center m-auto">

        <?php

        require_once('medicijnen-class.php'); // Inclusief de Artikel-klasse
        require "../database/apotheek-database.php"; // Inclusief de database-configuratie
        






        // Maak een nieuw artikel object met de nieuwe waarden
        $medicijnen = new Medicijn();

        $medicijnen->update();





        ?>
    </div>

</div>