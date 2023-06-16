<?php


class klant
{
    // properties - eigenschappen -----------------------------------------
    public $klantid;
    public $klantnaam;
    public $klantemail;
    public $klantadres;
    public $klantpostcode;
    public $klantwoonplaats;
    // $klantemail en $klantadres worden geërfd van Klant

    // methoden - functies ------------------------------------------------
    // constructor
    public function __construct($klantid = NULL, $klantnaam = NULL, $klantemail = NULL, $klantadres = NULL, $klantpostcode = NULL, $klantwoonplaats = NULL)
    {
        $this->klantnaam = $klantnaam;
        $this->klantemail = $klantemail;
        $this->klantadres = $klantadres;
        $this->klantpostcode = $klantpostcode;
        $this->klantwoonplaats = $klantwoonplaats;
    }
    // setters
    public function getklantid()
    {
        return $this->klantid;
    }

    public function getklantnaam()
    {
        return $this->klantnaam;
    }

    public function getklantemail()
    {
        return $this->klantemail;
    }

    public function getklantadres()
    {
        return $this->klantadres;
    }

    public function getklantpostcode()
    {
        return $this->klantpostcode;
    }

    public function getklantwoonplaats()
    {
        return $this->klantwoonplaats;
    }
   

    // methoden om gegevens af te drukken ---------------------------------
    public function voorstellen()
    {
        echo "Mijn klantemail is " . $this->getklantemail()
            . ", ik doe de klantklantemail "
            . $this->getklantemail()
            . ". Mijn klantadres is " . $this->getklantadres();
    }
    public function afdrukkenklant()
    {
        echo '<table class="table-auto">';
        echo '<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">';
        echo '<tr>';
        echo '<th scope="col" class="px-6 py-3">Name</th>';
        echo '<th scope="col" class="px-6 py-3">Email</th>';
        echo '<th scope="col" class="px-6 py-3">Address</th>';
        echo '<th scope="col" class="px-6 py-3">postcode</th>';
        echo '<th scope="col" class="px-6 py-3">City</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        echo '<tr class="bg-gray-800 border-b dark:bg-gray-800 dark:border-gray-700">';
        echo '<td class="px-6 py-4 text-white">' . $this->getklantnaam() . '</td>';
        echo '<td class="px-6 py-4 text-white">' . $this->getklantemail() . '</td>';
        echo '<td class="px-6 py-4 text-white">' . $this->getklantadres() . '</td>';
        echo '<td class="px-6 py-4 text-white">' . $this->getklantpostcode() . '</td>';
        echo '<td class="px-6 py-4 text-white">' . $this->getklantwoonplaats() . '</td>';
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';

    }

    // crud methoden ------------------------------------------------------
    public function createklant() // gegevens in de database zetten
    {
        require "../database/apotheek-database.php";
        // gegevens uit het object in variabelen zetten 
        $klantid = NULL;
        $klantnaam = $this->getklantnaam();
        $klantemail = $this->getklantemail();
        $klantadres = $this->getklantadres();
        $klantpostcode = $this->getklantpostcode();
        $klantwoonplaats = $this->getklantwoonplaats();

        // statement maken voor invoer in de tabel
        $sql = $conn->prepare("
    insert into klanten values
    (:klantid, :klantnaam, :klantemail, :klantadres, :klantpostcode, :klantwoonplaats)
");

        $sql->bindParam(":klantid", $klantid);
        $sql->bindParam(":klantnaam", $klantnaam);
        $sql->bindParam(":klantemail", $klantemail);
        $sql->bindParam(":klantadres", $klantadres);
        $sql->bindParam(":klantpostcode", $klantpostcode);
        $sql->bindParam(":klantwoonplaats", $klantwoonplaats);
        $sql->execute();
        // melding 
        echo "Deze klant is toegevoegd: <br/>";

    }
    public function readklant()
    {
        require "../database/apotheek-database.php";
        // statement maken
        $sql = $conn->prepare("
									select klantid, klantnaam, klantemail, klantadres, klantpostcode, klantwoonplaats 
									from klanten  
								 ");
        $sql->execute();
        echo '<table class="table-auto">';
        echo '<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">';
        echo '<tr>';
        echo '<th scope="col" class="px-6 py-3">Klantnaam</th>';
        echo '<th scope="col" class="px-6 py-3">Klantemail</th>';
        echo '<th scope="col" class="px-6 py-3">Klantadres</th>';
        echo '<th scope="col" class="px-6 py-3">Klantpostcode</th>';
        echo '<th scope="col" class="px-6 py-3">Klantwoonplaats</th>';

        foreach ($sql as $klant) {
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            echo '<tr>';
            // Added table row opening tag
            echo '<td class="px-6 py-4 text-white bg-slate-600">' . $klant["klantnaam"] . " - " . '</td>';
            echo '<td class="px-6 py-4 text-white bg-slate-400">' . $klant["klantemail"] . " - " . '</td>';
            echo '<td class="px-6 py-4 text-white bg-slate-600">' . $klant["klantadres"] . "<br/>" . '</td>';
            echo '<td class="px-6 py-4 text-white bg-slate-400">' . $klant["klantpostcode"] . "<br/>" . '</td>';
            echo '<td class="px-6 py-4 text-white bg-slate-600">' . $klant["klantwoonplaats"] . "<br/>" . '</td>';

        }
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';

    }
    public function updateklant($klantid)
    {
        require "../database/apotheek-database.php";
        // gegevens uit het object in variabelen zetten 
        $klantid;
        $klantnaam = $this->getklantnaam();
        $klantemail = $this->getklantemail();
        $klantadres = $this->getklantadres();
        $klantpostcode = $this->getklantpostcode();
        $klantwoonplaats = $this->getklantwoonplaats();
        // statement maken
        $sql = $conn->prepare("
									update klanten
									set klantnaam=:klantnaam, klantemail=:klantemail, klantadres=:klantadres, klantpostcode=:klantpostcode , klantwoonplaats=:klantwoonplaats
									where klantid=:klantid
								 ");
        // variabelen in de statement zetten
        $sql->bindParam(":klantid", $klantid);
        $sql->bindParam(":klantnaam", $klantnaam);
        $sql->bindParam(":klantemail", $klantemail);
        $sql->bindParam(":klantadres", $klantadres);
        $sql->bindParam(":klantpostcode", $klantpostcode);
        $sql->bindParam(":klantwoonplaats", $klantwoonplaats);
        $sql->execute();
    }
    public function deleteklant($klantid)
    {
        require "../database/apotheek-database.php";
    
        try {
            // Controleer of de klant recepten heeft
            $receptCount = $conn->prepare("SELECT COUNT(*) FROM recepten WHERE klantid = :klantid");
            $receptCount->execute(['klantid' => $klantid]);
            $receptCount = $receptCount->fetchColumn();
    
            if ($receptCount > 0) {
                throw new Exception("Deze klant heeft recepten. Verwijder eerst de recepten.");
            }
    
            // Verwijder de klant uit de database
            $deleteKlant = $conn->prepare("DELETE FROM klanten WHERE klantid = :klantid");
            $deleteKlant->execute(['klantid' => $klantid]);
    
            echo "Klant met ID " . $klantid . " is succesvol verwijderd!!";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
    public function searchklant($klantid)
    {
        require "../database/apotheek-database.php";

        // statement maken
        $sql = $conn->prepare("
									select klantid, klantnaam, klantemail, klantadres, klantpostcode, klantwoonplaats
									from klanten
									where klantid = :klantid			
								 ");
        // variabele in de stament zetten
        $sql->bindParam(":klantid", $klantid);
        $sql->execute();

        // gegevens uit de array in het object stoppen
        foreach ($sql as $klant) {
            //echo $klant["klantid"]. "<br/>";		// geen eigenschap van object
            $this->klantnaam = $klant["klantnaam"];
            $this->klantemail = $klant["klantemail"];
            $this->klantadres = $klant["klantadres"];
            $this->klantpostcode = $klant["klantpostcode"];
            $this->klantwoonplaats = $klant["klantwoonplaats"];
        }
    }
}
?>