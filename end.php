<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Projekt zespołowy - Wykorzystanie sztucznych sieci neuronowych do rozpoznawania płci mózgu">
  <title>Wynik testu</title>
  <link href="style.css" rel="stylesheet">
  <!-- Bootstrap CDN -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>

</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.html">Opis projektu</a>
          </li>
          <li><a href="test.html">Test</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="well">
      <h3>Wynik testu</h3>
      <p>
        <?php
	session_save_path('/tmp');
	session_start();
	echo "Wynik: ";
	echo $_SESSION['result'];
	?>
      </p>
      <p>
        <?php
	if ($_SESSION['result']>=300) echo "Mózg bardzo kobiecy";
	else if($_SESSION['result']>180) echo "Mózg kobiecy";
	else if($_SESSION['result']>=150) echo "Strefa wspólna";
	else if($_SESSION['result']>0) echo "Mózg męski";
	else echo "Mózg bardzo męski";
	?>
      </p>
      <p>
	Większość mężczyzn osiągnie wynik od 0 do 180, a większość kobiet od 150 do 300.
      </p>
    </div>
  </div>
</body>

</html>
