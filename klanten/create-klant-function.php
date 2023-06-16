<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../src/style.css">
	<script src="https://cdn.tailwindcss.com"></script>
	<title>create student formulier 2</title>

</head>

<body>
	<?php require "../navbar.php" ?>


	<div class="container mt-40 absolute">
		<div class="w-full max-w-xs grid  place-items-center m-auto">

			<h1 class="text-white text-2xl">create student formulier 2</h1>

			<?php
			require "klant.php"; // nodig om object te maken
			require "../database/apotheek-database.php"; // verbinding maken database
			
			// uitlezen vakjes van create-klant-form -------------------------
			$klantid = NULL; // komt niet uit het formulier (auto increment)
			$klantnaam = $_POST["klantnaam"];
			$klantemail = $_POST["klantemail"];
			$klantadres = $_POST["klantadres"];
			$klantpostcode = $_POST["klantpostcode"];
			$klantwoonplaats = $_POST["klantwoonplaats"];

			// maken object ---------------------------------------------------
			$student1 = new klant(NULL, $klantnaam, $klantemail, $klantadres, $klantpostcode, $klantwoonplaats); // maakt object
			$student1->createKlant(); // zet het object in de tabel
			$student1->afdrukkenKlant(); // drukt objectgegevens af
			?>

			<a href="schoolmenu.php">Terug naar het hoofdmenu</a>
		</div>
	</div>
</body>

</html>