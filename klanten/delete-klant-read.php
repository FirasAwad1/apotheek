<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../src/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
	<title>delete klant read</title>
</head>

<body>
<?php require "../navbar.php" ?>

	<div class="container mt-40 absolute">
		<div class="w-full max-w-xs grid place-items-center m-auto">
			<?php

			require "klant.php";
			$klantid = $_POST["klantid"];
			$klant1 = new Klant();
			$klant1->searchKlant($klantid);
			$klant1->afdrukkenKlant();
			?>
			<div class="w-full max-w-xs grid h-screen place-items-center m-auto">
				<form class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-56" action="delete-klant-function-uitvoeren.php"
					method="post">

					<input type="hidden" name="klantid" value=" <?php echo $klantid ?> ">

					<input type="hidden" name="verwijderBox" value="nee">
					<input type="checkbox" name="verwijderBox" value="ja">
					<label class="block text-gray-700 text-sm font-bold mb-2" for="verwijderBox"> Verwijder deze
						klant.</label><br /><br />
					<input
						class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
						type="submit"><br /><br />
				</form>
			</div>
		</div>
	</div>
</body>

</html>