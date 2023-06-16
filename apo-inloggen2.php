<?php

require_once "database/apotheek-database.php";

if (isset($_POST['inloggen'])) {
    session_start(); // Start the session here

    $login = $conn->prepare("SELECT gebruikerrol FROM gebruikers WHERE gebruikeremail = :gebruikeremailvak AND gebruikerwachtwoord = :gebruikerwachtwoordvak");
    $login->bindParam(":gebruikeremailvak", $_POST['gebruikeremailvak']);
    $login->bindParam(":gebruikerwachtwoordvak", $_POST['gebruikerwachtwoordvak']);
    $login->execute();

    if ($login->rowCount() === 1) {
        $gebruiker = $login->fetchObject();
        $_SESSION['gebruikerrol'] = $gebruiker->gebruikerrol;
        $_SESSION['gebruiker'] = $gebruiker;

        // Redirect to the appropriate page based on the user's role
        if ($gebruiker->gebruikerrol === "Apotheker") {
            header("Location: Apotheker/navbar.php");
        } elseif ($gebruiker->gebruikerrol === "Medewerker") {
            header("Location: Medewerker/navbar.php");
        } elseif ($gebruiker->gebruikerrol === "Dokter") {
            header("Location: Dokter/navbar.php");
        }
    } else {
        echo "Maak eerst een account aan via ceo.";
    }
}
?>

<?php
// Remove session_start() from this section

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
        include 'apo-inloggen1.php';
    }
} else {
    // Gebruiker niet ingelogd, toon bijvoorbeeld een algemene navbar
    include 'apo-inloggen1.php';
}
?>
