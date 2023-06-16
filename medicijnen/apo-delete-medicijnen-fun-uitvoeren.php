<?php require_once "../navbar.php"; ?>
<div class="container mt-40 absolute">
    <div class="w-full max-w-xs grid  place-items-center m-auto">

        <?php
        require_once('medicijnen-class.php'); // Inclusief de Artikel-klasse
        require "../database/apotheek-database.php"; // Inclusief de database-configuratie
        



        // Maak een nieuw medicijn-object aan
        $medicijn = new Medicijn();

        // Roep de delete methode aan om de medicijn uit de database te verwijderen
        $medicijn->mediId = $_POST['mediId'];
        $medicijn->delete();

        ?>
    </div>


</div>