<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../src/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
  <title>Create artikelen</title>
</head>

<body>
  <?php require "../navbar.php" ?>
  <div class="w-full max-w-xs grid h-screen place-items-center m-auto">
    <form class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-56" action="apo-create-medicijnen-fun.php" method="post">
      <div class="mb-4"></div>

      <form class="form" method="post" action="bas-create-medicijnen2.php">

        <label class="block text-gray-700 text-sm font-bold mb-2" for="mediNaam">mediNaam :</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="mediNaam" name="mediNaam"></input><br>

        <label class="block text-gray-700 text-sm font-bold mb-2" for="mediHovelheid">mediHovelheid:</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="mediHovelheid" name="mediHovelheid"><br>

        <label class="block text-gray-700 text-sm font-bold mb-2" for="mediPrijs">mediPrijs:</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="mediPrijs" name="mediPrijs"><br>

        <label class="block text-gray-700 text-sm font-bold mb-2" for="mediBeschrijving">mediBeschrijving:</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="mediBeschrijving" name="mediBeschrijving"><br>


        <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-20" type="submit" value="Toevoegen">
      </form>
  </div>

</body>

</html>