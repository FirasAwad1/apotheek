<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>

<div class="w-full max-w-xs grid h-screen place-items-center m-auto">
        <form class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-56" action="apo-create-gebruiker2.php" method="post">

        <label class="block text-gray-700 text-sm font-bold mb-2" for="gebruikernaam">naam</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="gebruikernaam"><br>

        <label class="block text-gray-700 text-sm font-bold mb-2" for="gebruikerleeftijd">gebruikerleeftijd</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" name="gebruikerleeftijd"><br>

        <label class="block text-gray-700 text-sm font-bold mb-2" for="gebruikeremail">gebruikeremail</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="gebruikeremail"><br>

        <label class="block text-gray-700 text-sm font-bold mb-2" for="gebruikerwachtwoordvak">gebruikerwachtwoord</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="gebruikerwachtwoord"><br>


        <input type="checkbox" id="vehicle1" name="gebruikerrol" value="Apotheker">
        <label for="rol1">Apotheker</label><br>
        <input type="checkbox" id="vehicle2" name="gebruikerrol" value="Medewerker">
        <label for="rol2"> Medewerker</label><br>
        <input type="checkbox" id="vehicle3" name="gebruikerrol" value="Dokter">
        <label for="rol3">Dokter</label><br><br>
        <br>


        <input type="submit">
    </form>
</div>
</body>
</html>
