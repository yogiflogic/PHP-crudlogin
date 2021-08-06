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
</head>
<header>
  <a href="index.php" style="float: right;">LOGOUT</a>
</header>
<body>
<div class="container">
  <a href="#">
    <img src="../asset/image/moto-gp-logo.svg" alt="logo" width="175" height="125" >
  </a>          
  <table class="table table-dark table-hover">
    <thead>
    <tr>
        <th align="center">No</th>
        <th align="center">Name Rider</th>
		<th align="center">No Start</th>
        <th align="center">Delete Data</th>
    </tr>
      </tr>
    </thead>
    <tbody>
        <?php require_once "tampilkandata.php"; ?>
    </tbody>
  </table>
</div>
<div class="form-group" >
  <label for="comment">Comment:</label>
  <textarea class="form-control " rows="5" id="comment" ></textarea>
</div>
<button type="button" class="btn btn-primary">KIRIM</button>
</body>
</html>
