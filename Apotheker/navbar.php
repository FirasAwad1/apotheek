<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Document</title>
</head>
<body>
   <div id='cssmenu'>
      <div class="logo">
          <img src="../images/prof.jpg" class="profile">
          <h1 class="logo-caption"><span class="tweak">A</span>dmin</h1>
      </div>
      <ul>
          <li><a href='#'>Home</a></li>
          <li class='active has-sub'><a href='#'>Medicijnen</a>
          <ul>
                  <li><a href='../medicijnen/apo-create-medicijnen-form.php'>Medicijn Toevoegen</a></li>
                  <li><a href='../medicijnen/apo-medicijnen-read.php'>Medicijn Zien</a></li>
                  <li><a href='../medicijnen/apo-update-medicijnen-form.php'>Medicijn Aanpasen</a></li>
                  <li><a href='../medicijnen/apo-search-medicijn-form.php'>Medicijn Zoeken</a></li>
                  <li><a href='../medicijnen/apo-delete-medicijnen-form.php'>Medicijn Verwijderen</a></li>
              </ul>
          </li>
          <li class='active has-sub'><a href='#'>Recepten</a>
          <ul>
                  <li><a href='../recepten/create-recept-form.php'>Receot Toevoegen</a></li>
                  <li><a href='../recepten/read-recept.php'>Receot Zien</a></li>
                  <li><a href='../recepten/update-recept-form.php'>Receot Aanpasen</a></li>
                  <li><a href='../recepten/search-recept-formulier.php'>Receot Zoeken</a></li>
                  <li><a href='../recepten/delete-recet-form.php'>Receot Verwijderen</a></li>
              </ul>
          </li>
          <li><a href='#'>About</a></li>
          <li><a href='#'>Contact</a></li>
      </ul>
  </div>
  
        <script src="../js/main.js"></script>
</body>
</html>
