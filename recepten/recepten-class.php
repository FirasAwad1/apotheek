<?php


class Recept
{
    // properties - eigenschappen -----------------------------------------
    public $receptid;
    public $receptnaam;
    public $dokternaam;
    public $mediId;
    public $klantid;

    // $dokternaam en $mediId worden geërfd van Klant

    // methoden - functies ------------------------------------------------
    // constructor
    public function __construct($receptid = NULL, $receptnaam = NULL, $dokternaam = NULL, $mediId = NULL, $klantid = NULL)
    {
        $this->receptid = $receptid;
        $this->receptnaam = $receptnaam;
        $this->dokternaam = $dokternaam;
        $this->mediId = $mediId;
        $this->klantid = $klantid;

    }
    // setters
    public function getreceptid()
    {
        return $this->receptid;
    }

    public function getreceptnaam()
    {
        return $this->receptnaam;
    }

    public function getdokternaam()
    {
        return $this->dokternaam;
    }

    public function getmediId()
    {
        return $this->mediId;
    }

    public function getklantid()
    {
        return $this->klantid;
    }

    // get_dokternaam() en get_mediId worden geërfd van Klant

    // methoden om gegevens af te drukken ---------------------------------
    public function voorstellen()
    {

    }
    public function afrukkenrecept()
    {
        echo '<table class="table-auto">';
        echo '<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">';
        echo '<tr>';
        echo '<th scope="col" class="px-6 py-3">Recept ID</th>';
        echo '<th scope="col" class="px-6 py-3">Recept Naam</th>';
        echo '<th scope="col" class="px-6 py-3">Dokter Naam</th>';
        echo '<th scope="col" class="px-6 py-3">Medi ID</th>';
        echo '<th scope="col" class="px-6 py-3">Klant ID</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        echo '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">';
        echo '<td class="px-6 py-4 text-white">' . $this->getreceptid() . '</td>';
        echo '<td class="px-6 py-4 text-white">' . $this->getreceptnaam() . '</td>';
        echo '<td class="px-6 py-4 text-white">' . $this->getdokternaam() . '</td>';
        echo '<td class="px-6 py-4 text-white">' . $this->getmediId() . '</td>';
        echo '<td class="px-6 py-4 text-white">' . $this->getklantid() . '</td>';
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
    }


    // crud methoden ------------------------------------------------------
    public function createrecept()
    {
        require "../database/apotheek-database.php";

        try {
            // Voorbereiden van de SQL-query
            $query = "INSERT INTO recepten (receptid, receptnaam, dokternaam, mediId, klantid)
            VALUES (:receptid, :receptnaam, :dokternaam, :mediId, :klantid)";

            // Voorbereiden van de statement
            $statement = $conn->prepare($query);

            // Binden van de parameterwaarden aan de statement
            $receptid = $this->getreceptid();
            $receptnaam = $this->getreceptnaam();
            $dokternaam = $this->getdokternaam();
            $mediId = $this->getmediId();
            $klantid = $this->getklantid();

            $statement->bindParam(":receptid", $receptid);
            $statement->bindParam(":receptnaam", $receptnaam);
            $statement->bindParam(":dokternaam", $dokternaam);
            $statement->bindParam(":mediId", $mediId);
            $statement->bindParam(":klantid", $klantid);

            // Uitvoeren van de statement
            $statement->execute();

            echo "Recept is succesvol toegevoegd aan de database.";
        } catch (PDOException $e) {
            echo "Fout bij het toevoegen van het recept aan de database: " . $e->getMessage();
        }

        $sql = "UPDATE medicijnen SET mediHovelheid = mediHovelheid - 1 WHERE mediId = :mediId";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':mediId', $mediId);
        $stmt->execute();
    }


    public function readrecept()
    {
        require "../database/apotheek-database.php";

        try {
            // Bereid de SQL-query voor
            $query = "
                SELECT receptid, receptnaam, dokternaam, mediId, klantid
                FROM recepten
            ";

            // Prepare the statement
            $statement = $conn->prepare($query);

            // Execute the statement
            $statement->execute();

            // Fetch all the recepten
            $recepten = $statement->fetchAll();

            // Check if there are any recepten
            if (count($recepten) > 0) {
                echo '<table class="table-auto">';
                echo '<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">';
                echo '<tr>';
                echo '<th scope="col" class="px-6 py-3">Recept ID</th>';
                echo '<th scope="col" class="px-6 py-3">Recept Naam</th>';
                echo '<th scope="col" class="px-6 py-3">Dokter Naam</th>';
                echo '<th scope="col" class="px-6 py-3">Medi ID</th>';
                echo '<th scope="col" class="px-6 py-3">Klant ID</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';

                // Herhaal de recepten en druk elke rij af
                foreach ($recepten as $recept) {
                    echo '<tr>';
                    echo '<td class="px-6 py-4 text-white bg-slate-600">' . $recept["receptid"] . '</td>';
                    echo '<td class="px-6 py-4 text-white bg-slate-400">' . $recept["receptnaam"] . '</td>';
                    echo '<td class="px-6 py-4 text-white bg-slate-600">' . $recept["dokternaam"] . '</td>';
                    echo '<td class="px-6 py-4 text-white bg-slate-400">' . $recept["mediId"] . '</td>';
                    echo '<td class="px-6 py-4 text-white bg-slate-600">' . $recept["klantid"] . '</td>';
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';
            } else {
                echo 'No recepten found.';
            }
        } catch (PDOException $e) {
            echo "Error retrieving the recepten from the database: " . $e->getMessage();
        }
    }

    public function updaterecept($receptid)
    {
        require "../database/apotheek-database.php";

        try {
            // Bereid SQL query
            $query = "UPDATE recepten SET receptnaam = :receptnaam, dokternaam = :dokternaam, mediId = :mediId, klantid = :klantid WHERE receptid = :receptid";

            // Bereid statement
            $statement = $conn->prepare($query);

            // Bind de parameterwaarden aan de instructie
            $receptnaam = $this->getreceptnaam();
            $dokternaam = $this->getdokternaam();
            $mediId = $this->getmediId();
            $klantid = $this->getklantid();

            $statement->bindParam(":receptnaam", $receptnaam);
            $statement->bindParam(":dokternaam", $dokternaam);
            $statement->bindParam(":mediId", $mediId);
            $statement->bindParam(":klantid", $klantid);
            $statement->bindParam(":receptid", $receptid);

            // Voer de instructie uit
            $statement->execute();

            echo "Recept is succesvol bijgewerkt in de database.";
        } catch (PDOException $e) {
            echo "Fout bij het bijwerken van het recept in de database: " . $e->getMessage();
        }
    }

    public function deleterecept($receptid)
    {
        require "../database/apotheek-database.php";

        try {
            // Bereid SQL query
            $query = "DELETE FROM recepten WHERE receptid = :receptid";

            // Bereid statement
            $statement = $conn->prepare($query);

            // Bind de parameterwaarde aan de instructie
            $statement->bindParam(":receptid", $receptid);

            // Execute the statement
            $statement->execute();

            echo "Recept is succesvol verwijderd uit de database.";
        } catch (PDOException $e) {
            echo "Fout bij het verwijderen van het recept uit de database: " . $e->getMessage();
        }
    }
    public function searchrecept($receptid)
    {
        require "../database/apotheek-database.php";

        try {
            // Bereid SQL query
            $query = "SELECT * FROM recepten WHERE receptid = :receptid";

            // Bereid statement
            $statement = $conn->prepare($query);

            // Bind de parameterwaarde aan de instructie
            $statement->bindParam(":receptid", $receptid);

            // Execute the statement
            $statement->execute();

            // Haal de receptinformatie op
            $recept = $statement->fetch();

            // Stel de ontvangsteigenschappen in
            $this->receptid = $recept["receptid"];
            $this->receptnaam = $recept["receptnaam"];
            $this->dokternaam = $recept["dokternaam"];
            $this->mediId = $recept["mediId"];
            $this->klantid = $recept["klantid"];

        } catch (PDOException $e) {
            echo "Fout bij het zoeken naar het recept: " . $e->getMessage();
        }
    }

}
?>