<?php
if (isset($_POST['login'])){
  if(isset(login($_POST)){

  }
}
?>

<form class="row g-3" action="login.php" method="post">
  <div class="col-5">
    <label for="staticEmail2" class="visually-hidden">Email</label>
    <input type="text" name="username" class="form-control-plaintext" id="staticEmail2" placeholder="email">
  </div>
  <div class="col-5">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" name="login">Login</button>
  </div>
</form>