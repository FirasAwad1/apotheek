<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update-recept</title>
</head>

<body>
<?php require_once "../navbar.php" ?>
    <div class="w-full max-w-xs grid h-screen place-items-center m-auto">
        <form class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-56" action="update-recept-read.php" method="post">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="receptid">receptid:</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="receptid" name="receptid">
            <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-20" type="submit" value="zoeken">
        </form>
    </div>
</body>

</html>