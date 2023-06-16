<?php

session_start();

// Controleer of de gebruiker is ingelogd en een rol heeft
if (isset($_SESSION['gebruikerrol'])) {
    $gebruikerRol = $_SESSION['gebruikerrol'];

    // Laad de juiste navbar op basis van de rol
    if ($gebruikerRol === "Apotheker") {
        include 'Apotheker/index.php';
    } elseif ($gebruikerRol === "Dokter") {
        include 'Dokter/index.php';
    } elseif ($gebruikerRol === "Medewerker") {
        include 'Medewerker/index.php';
    } else {
        include 'apotheek/navbar-standaard.php';
    }
} else {
    // Gebruiker niet ingelogd, toon bijvoorbeeld een algemene navbar
    include 'apotheek/navbar-standaard.php';
}

?>
