<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <title>Hegycsúcsok</title>
  <style>
    .row{
      padding: 0px 20px;
    }
  </style>
  <script src="utils.js"></script>
  <script src="nav.js"></script>
  <script src="actmanu.js"></script>
</head>

<body>
  <div class="container bg-light p-0">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded shadow ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item p-2 m-2">
            <a class="nav-link" href="index.php">Főoldal</a>
          </li>
          <li class="nav-item p-2 m-2">
            <a class="nav-link" href="index.php?prog=statisztika.php">Statisztika</a>
          </li>
          <li class="nav-item p-2 m-2">
            <a class="nav-link" href="index.php?prog=atkelohelyekO.php">Átkelőhelyek órszágonként</a>
          </li>
          <li class="nav-item p-2 m-2">
            <a class="nav-link" href="index.php?prog=atkelohelyekM.php">Átkelőhelyek megyénként</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="row p-3 justify-content-center">
      <!--az URL-ben kapott program betöltése-->
      <?php

        if (isset($_GET["prog"]))
            include $_GET["prog"];
        else
            include "fooldal.php";
        ?>
    </div>

  </div>
 
  <script src="bootstrap/jquery-3.5.1.min.js"></script>
  <script src="bootstrap/bootstrap.bundle.js"></script>
</body>

</html>