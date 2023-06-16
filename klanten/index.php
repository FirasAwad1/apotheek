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
          <li class='active has-sub'><a href='#'>Klanten</a>
              <ul>
                  <li><a href='create-klant-form.php'>Klant Toevoegen</a></li>
                  <li><a href='klant-read.php'>Klant Zien</a></li>
                  <li><a href='update-klant-form.php'>Klant Aanpasen</a></li>
                  <li><a href='search-klant-Formulier.php'>Klant Zoeken</a></li>
                  <li><a href='delete-kalnt-form.php'>Klant Verwijderen</a></li>
              </ul>
          </li>
          <li class='active has-sub'><a href='#'>Medicijnen</a>
              <ul>
                  <li><a href='#'>Medicijn Toevoegen</a></li>
                  <li><a href='#'>Medicijn Zien</a></li>
                  <li><a href='#'>Medicijn Aanpasen</a></li>
                  <li><a href='#'>Medicijn Zoeken</a></li>
                  <li><a href='#'>Medicijn Verwijderen</a></li>
              </ul>
          </li>
          <li><a href='#'>About</a></li>
          <li><a href='#'>Contact</a></li>
      </ul>
  </div>
  
        <script src="../js/main.js"></script>
</body>
</html>