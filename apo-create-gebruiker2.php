<?php
class Gebruiker
{
    public $gebruikerid;
    public $gebruikernaam;
    public $gebruikerleeftijd;
    public $gebruikeremail;
    public $gebruikerwachtwoord;
    public $gebruikerrol;

    // Constructor to initialize the article object
    public function __construct($gebruikerid, $gebruikernaam, $gebruikerleeftijd, $gebruikeremail, $gebruikerwachtwoord, $gebruikerrol)
    {
        $this->gebruikerid = $gebruikerid;
        $this->gebruikernaam = $gebruikernaam;
        $this->gebruikernaam = $gebruikernaam;
        $this->gebruikerleeftijd = $gebruikerleeftijd;
        $this->gebruikeremail = $gebruikeremail;
        $this->gebruikerwachtwoord = $gebruikerwachtwoord;
        $this->gebruikerrol = $gebruikerrol;
    }



    // Getter methods
    public function getgebruikerid()
    {
        return $this->gebruikerid;
    }
    public function gebruikernaam()
    {
        return $this->gebruikernaam;
    }
    public function getgebruikerleeftijd()
    {
        return $this->gebruikerleeftijd;
    }
    public function getgebruikeremail()
    {
        return $this->gebruikeremail;
    }
    public function getgebruikerwachtwoord()
    {
        return $this->gebruikerwachtwoord;
    }
    public function getgebruikerrol()
    {
        return $this->gebruikerrol;
    }
}
echo '<div class="container mt-40 absolute">';
echo '   <div class="w-full max-w-xs grid place-items-center m-auto">';

function gebruikerToevoegen()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nieuw_gebruiker = new Gebruiker(NULL, $_POST['gebruikernaam'], $_POST['gebruikerleeftijd'], $_POST['gebruikeremail'], $_POST['gebruikerwachtwoord'], $_POST['gebruikerrol']);

        // Maak een SQL-query aan om het nieuwe artikel toe te voegen
        $gebruikernaam = $nieuw_gebruiker->gebruikernaam();
        $gebruikerleeftijd = $nieuw_gebruiker->getgebruikerleeftijd();
        $gebruikeremail = $nieuw_gebruiker->getgebruikeremail();
        $gebruikerwachtwoord = $nieuw_gebruiker->getgebruikerwachtwoord();
        $gebruikerrol = $nieuw_gebruiker->getgebruikerrol();
        require_once "database/apotheek-database.php";

        $stmt = $conn->prepare("INSERT INTO gebruikers (gebruikernaam, gebruikerleeftijd, gebruikeremail, gebruikerwachtwoord, gebruikerrol) VALUES (:gebruikernaam, :gebruikerleeftijd, :gebruikeremail, :gebruikerwachtwoord, :gebruikerrol)");

        $stmt->bindParam(':gebruikernaam', $gebruikernaam);
        $stmt->bindParam(':gebruikerleeftijd', $gebruikerleeftijd);
        $stmt->bindParam(':gebruikeremail', $gebruikeremail);
        $stmt->bindParam(':gebruikerwachtwoord', $gebruikerwachtwoord);
        $stmt->bindParam(':gebruikerrol', $gebruikerrol);

        // Voer de query uit en check het resultaat
        if ($stmt->execute()) {
            echo "<p>Gebruiker toegevoegd!</p>";
        } else {
            echo "<p>Er is iets misgegaan. Het artikel is niet toegevoegd.</p>";
        }
    }
}
gebruikerToevoegen();

echo '</div>';
echo '</div>';
?>