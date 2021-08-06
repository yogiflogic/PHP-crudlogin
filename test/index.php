<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Rider Motogp</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<header>
  <!--<a href="index.php" style="float: right;">LOGOUT</a>
</header>-->
<body>
<div class="container">
  <br>
  <!--<a href="#">
    <img src="../asset/image/moto-gp-logo.svg" alt="logo" width="175" height="125" >
  </a>-->          
  <table class="table table-dark table-hover">
    <thead>
    <tr>
    <th align="center">Rank</th>
        <th align="center">Name</th>
        <th align="center">Country</th>
		    <th align="center">Sales</th>
        <th align="center">Profit</th></th>
        <th align="center">Assets</th>
		    <th align="center">Market Value</th>
        <th align="center">Year</th>
        <th align="center">CONTROL</th>
    </tr>
      </tr>
    </thead>
    <tbody>
        <?php require_once "proses.php"; ?>
    </tbody>
  </table>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
