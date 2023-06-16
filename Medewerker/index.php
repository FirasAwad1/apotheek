<?php require "navbar.php" ?>


<?php



if (isset($_SESSION['gebruiker'])) {
    if ($_SESSION['gebruiker']->gebruikerrol === "Apotheker") {
        echo "<div class='contact-form absolute top-0 right-0 mt-8 mr-8 text-center'>";
        echo "Welcome " . $_SESSION['gebruiker']->gebruikerrol;
        echo "<form><button type='submit' name='loguit' class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded'>Uitloggen</button></form>";
        echo "<a href='profiel1.php' class='text-blue-500 hover:text-blue-700'>Profile</a>";
        echo "</div>";


    } elseif ($_SESSION['gebruiker']->gebruikerrol === "Medewerker") {
        echo "<div class='contact-form absolute top-0 right-0 mt-8 mr-8 text-center'>";
        echo "Welcome " . $_SESSION['gebruiker']->gebruikerrol;
        echo "<form><button type='submit' name='loguit' class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded'>Uitloggen</button></form>";
        echo "<a href='profiel1.php' class='text-blue-500 hover:text-blue-700'>Profile</a>";
        echo "</div>";
    } elseif ($_SESSION['gebruiker']->gebruikerrol === "Dokter") {
        echo "<div class='contact-form absolute top-0 right-0 mt-8 mr-8 text-center'>";
        echo "Welcome " . $_SESSION['gebruiker']->gebruikerrol;
        echo "<form><button type='submit' name='loguit' class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded'>Uitloggen</button></form>";
        echo "<a href='profiel1.php' class='text-blue-500 hover:text-blue-700'>Profile</a>";
        echo "</div>";
    } else {
        header("location:http://localhost/apotheek/apo-inloggen1.php", true);
        die("");
    }
} else {
    header("location:http://localhost/apotheek/apo-inloggen1.php", true);
    die("");
}
if (isset($_GET['loguit'])) {
    session_unset();
    session_destroy();
    header("location:http://localhost/apotheek/apo-inloggen1.php", true);
}