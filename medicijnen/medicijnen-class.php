<?php
class Medicijn
{
    public $mediId;
    public $klantid;
    public $mediNaam;
    public $mediHovelheid;
    public $mediPrijs;
    public $mediBeschrijving;


    // Constructor om het artikel object te initialiseren.
    public function __construct($mediId = NULL, $klantid = NULL, $mediNaam = NULL, $mediHovelheid = NULL, $mediPrijs = NULL, $mediBeschrijving = NULL)
    {
        $this->mediId = NULL;
        $this->klantid = $klantid;
        $this->mediNaam = $mediNaam;
        $this->mediHovelheid = $mediHovelheid;
        $this->mediPrijs = $mediPrijs;
        $this->mediBeschrijving = $mediBeschrijving;
    }

    // Getter methods
    public function getmediId()
    {
        return $this->mediId;
    }
    public function getklantid()
    {
        return $this->klantid;
    }
    public function getartId()
    {
        return $this->mediNaam;
    }
    public function getmediHovelheid()
    {
        return $this->mediHovelheid;
    }
    public function getmediPrijs()
    {
        return $this->mediPrijs;
    }
    public function getmediBeschrijving()
    {
        return $this->mediBeschrijving;
    }


    public function setmediId()
    {
        return $this->mediId;
    }
    public function setklantid()
    {
        return $this->klantid;
    }
    public function setartId()
    {
        return $this->mediNaam;
    }
    public function setmediHovelheid()
    {
        return $this->mediHovelheid;
    }
    public function setmediPrijs()
    {
        return $this->mediPrijs;
    }
    public function setmediBeschrijving()
    {
        return $this->mediBeschrijving;
    }
    public function create()
    {
        require "../database/apotheek-database.php";

        // Haal de formuliergegevens op met behulp van de $_POST superglobale variabele.
        $mediId = NULL;
        $mediNaam = $_POST['mediNaam'];
        $mediHovelheid = $_POST['mediHovelheid'];
        $mediPrijs = $_POST['mediPrijs'];
        $mediBeschrijving = $_POST['mediBeschrijving'];

        // Maak een nieuw Medicijn object aan met de formuliergegevens.
        $Medicijn = new Medicijn(NULL, $mediNaam, $mediNaam, $mediHovelheid, $mediPrijs, $mediBeschrijving);

        // Insert the Medicijn into the database
        $sql = $conn->prepare("
        insert into medicijnen values
        (:mediId, :mediNaam, :mediHovelheid, :mediPrijs, :mediBeschrijving)
    ");
        $sql->execute(
            [
                "mediId" => $Medicijn->mediId,
                "mediNaam" => $Medicijn->mediNaam,
                "mediHovelheid" => $Medicijn->mediHovelheid,
                "mediPrijs" => $Medicijn->mediPrijs,
                "mediBeschrijving" => $Medicijn->mediBeschrijving,
            ]
        );

        echo "Medicijn succesvol aangemaakt!";
    }



    public function update()
    {
        require "../database/apotheek-database.php";

        $mediId = $_POST['mediId'];
        $mediNaam = $_POST['mediNaam'];
        $mediHovelheid = $_POST['mediHovelheid'];
        $mediPrijs = $_POST['mediPrijs'];
        $mediBeschrijving = $_POST['mediBeschrijving'];


        // Maak een nieuw artikel object met de nieuwe waarden
        $artikel = new Medicijn($mediId, $mediNaam, $mediHovelheid, $mediPrijs, $mediBeschrijving);

        // Update het artikel in de database
        $sql = $conn->prepare("UPDATE Medicijnen SET mediNaam =:mediNaam , mediHovelheid=:mediHovelheid, mediPrijs=:mediPrijs, mediBeschrijving=:mediBeschrijving WHERE mediId =:mediId ");
        $sql->execute(
            [
                "mediId" => $mediId,
                "mediNaam" => $mediNaam,
                "mediHovelheid" => $mediHovelheid,
                "mediPrijs" => $mediPrijs,
                "mediBeschrijving" => $mediBeschrijving,
            ]
        );

        echo "Medicijn succesvol geüpdatet!";
    }

    public function delete()
    {
        require "../database/apotheek-database.php";

        // Controleer of het medicijn gerelateerde recepten heeft
        $receptCount = $conn->prepare("SELECT COUNT(*) FROM recepten WHERE mediId = :mediId");
        $receptCount->execute(['mediId' => $this->mediId]);
        $receptCount = $receptCount->fetchColumn();

        if ($receptCount > 0) {
            echo "Kan het medicijn niet verwijderen omdat het een recepten heeft..";
            return; // Sluit de functie af om verdere uitvoering te voorkomen
        }

        // Delete the medicijn from the database
        $deleteMedicijn = $conn->prepare("DELETE FROM Medicijnen WHERE mediId = :mediId");
        $deleteMedicijn->execute(["mediId" => $this->mediId]);

        echo "Medicijn met ID " . $this->mediId . " is succesvol verwijderd!";
    }




    public function read()
    {
        require "../database/apotheek-database.php";

        $sql = $conn->prepare("
        select mediId, mediNaam, mediHovelheid, mediPrijs, mediBeschrijving
        from medicijnen");

        $sql->execute();
        echo '<table class="table-auto">';
        echo '<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">';
        echo '<tr>';
        echo '<th scope="col" class="px-6 py-3">Mecicijn Id</th>';
        echo '<th scope="col" class="px-6 py-3">Mecicijn naam</th>';
        echo '<th scope="col" class="px-6 py-3">Mecicijn Hoveelheid</th>';
        echo '<th scope="col" class="px-6 py-3">Mecicijn prijs</th>';
        echo '<th scope="col" class="px-6 py-3">Mecicijn Beschrijving</th>';
        //uitlezen aary 
        foreach ($sql as $Medicijn) {

            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            echo '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">';
            echo '<td class="px-6 py-4 text-white">' . $this->mediId = $Medicijn["mediId"] . "-";
            echo '<td class = "text-white">' . $this->mediNaam = $Medicijn["mediNaam"] . "-";
            echo '<td class="px-6 py-4 text-white">' . $this->mediHovelheid = $Medicijn["mediHovelheid"];
            echo '<td class="px-6 py-4 text-white">' . $this->mediPrijs = $Medicijn["mediPrijs"];
            echo '<td class="px-6 py-4 text-white">' . $this->mediBeschrijving = $Medicijn["mediBeschrijving"];

        }
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
    }

    public function afdrukkenMedicijn()
    {
        echo '<table class="table-auto">';
        echo '<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">';
        echo '<tr>';
        echo '<th scope="col" class="px-6 py-3">medicijn Naam</th>';
        echo '<th scope="col" class="px-6 py-3">medicijn Hovelheid</th>';
        echo '<th scope="col" class="px-6 py-3">medicijn Prijs</th>';
        echo '<th scope="col" class="px-6 py-3">medicijn Beschrijving</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        echo '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">';
        echo '<td class="px-6 py-4 text-white">' . $this->mediNaam . "</td>" . "<br>";
        echo '<td class="px-6 py-4 text-white">' . $this->mediHovelheid . "</td>" . "<br>";
        echo '<td class="px-6 py-4 text-white">' . $this->mediPrijs . "</td>" . "<br>";
        echo '<td class="px-6 py-4 text-white">' . $this->mediBeschrijving . "</td>" . "<br>";
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
    }


    public function searchMedicijn($mediId)
    {
        require "../database/apotheek-database.php";
        $sql = $conn->prepare("
        select * from Medicijnen
        where mediId=:mediId
        ");
        $sql->bindParam(":mediId", $mediId);
        $sql->execute();

        foreach ($sql as $Medicijn) {
            $this->mediNaam = $Medicijn["mediNaam"];
            $this->mediHovelheid = $Medicijn["mediHovelheid"];
            $this->mediPrijs = $Medicijn["mediPrijs"];
            $this->mediBeschrijving = $Medicijn["mediBeschrijving"];
        }

        echo $mediId;



    }
}