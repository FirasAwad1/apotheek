<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../main.css">
    <title>Document</title>
</head>

<body>
    <?php require_once "../navbar.php" ?>

    <div class="container">
        <div class="container mt-40 absolute">
            <div class="w-full max-w-xs grid place-items-center m-auto">
                <table class="table-auto">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">mediId</th>
                            <th scope="col" class="px-6 py-3">mediNaam</th>
                            <th scope="col" class="px-6 py-3">mediHovelheid</th>
                            <th scope="col" class="px-6 py-3">mediPrijs</th>
                            <th scope="col" class="px-6 py-3">mediBeschrijving</th>
                        </tr>

                        <?php
                        require_once "medicijnen-class.php";
                        // artikelkenteken uit het formulier halen
                        $mediId = $_POST["mediId"];

                        require "../database/apotheek-database.php";
                        global $conn;

                        $sql = $conn->prepare("
            SELECT mediId, mediNaam, mediHovelheid, mediPrijs, mediBeschrijving
            FROM medicijnen
            WHERE mediId = :mediId");
                        $sql->execute(["mediId" => $mediId]);

                        // artikelgegevens laten zien
                        foreach ($sql as $medicijn) {
                            echo '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">';
                            echo "<form class='form' action='bas-delet3-medicijn.php' method='post'>";
                            echo '<td class="px-6 py-4 text-white">' . $medicijn["mediId"] . "</td>";
                            echo '<td class="px-6 py-4 text-white">' . $medicijn["mediNaam"] . "</td>";
                            echo '<td class="px-6 py-4 text-white">' . $medicijn["mediHovelheid"] . "</td>";
                            echo '<td class="px-6 py-4 text-white">' . $medicijn["mediPrijs"] . "</td>";
                            echo '<td class="px-6 py-4 text-white">' . $medicijn["mediBeschrijving"] . "</td>";
                            echo "</tr>";
                            echo '</tbody>';
                            echo '</table>';
                            echo "</form>";
                        }
                        echo "</table><br />";
                        ?>
                        <form action="apo-delete-medicijnen-fun-uitvoeren.php" method="post">
                            <h4 class="text-white text-xl mt-20">Wil je de medicijn verwijderen?</h4>
                            <input type='hidden' name='mediId' value='<?php echo $mediId; ?>'>
                            <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-20" type='submit' value='Verwijderen'>
                        </form>
            </div>
        </div>
    </div>


</body>

</html>