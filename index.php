<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="login-form/fonts/icomoon/style.css">

    <link rel="stylesheet" href="login-form/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="login-form/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="login-form/css/style.css">

    <title>Login #7</title>
  </head>
  <body>


    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="login-form/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6 contents">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="mb-4">
                <h3>Sign In</h3>
                <p class="mb-4">Terhubung Dengan Orang-Orang Yang Soleh</p>
              </div>
              <form action="control/login.php" method="post">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" autocomplete="off">

                </div>
                <div class="form-group last mb-4">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" autocomplete="off">
                </div>
                
                <div class="d-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                </div>

                <input type="submit" value="Log In" class="btn btn-block btn-primary" name="login ">

                <span class="d-block text-left my-4 text-muted">&mdash; or login with &mdash;</span>
                
                <div class="social-login">
                  <a href="#" class="facebook">
                    <span class="icon-facebook mr-3"></span> 
                  </a>
                  <a href="#" class="twitter">
                    <span class="icon-twitter mr-3"></span> 
                  </a>
                  <a href="#" class="google">
                    <span class="icon-google mr-3"></span> 
                  </a>
                </div>
              </form>
              </div>
            </div>
            
          </div>
          
        </div>
      </div>
    </div>
  
    <script src="login-form/js/jquery-3.3.1.min.js"></script>
    <script src="login-form/js/popper.min.js"></script>
    <script src="login-form/js/bootstrap.min.js"></script>
    <script src="login-form/js/main.js"></script>
  </body>
</html>

<?php
function hitung_umur($tanggal_lahir){
	$birthDate = new DateTime($tanggal_lahir);
	$today = new DateTime("today");
	if ($birthDate > $today) { 
	    exit("0 tahun 0 bulan 0 hari");
	}
	$y = $today->diff($birthDate)->y;
	$m = $today->diff($birthDate)->m;
	$d = $today->diff($birthDate)->d;
	return $y." tahun ".$m." bulan ".$d." hari";
}

echo hitung_umur("1991-09-01");
?>
