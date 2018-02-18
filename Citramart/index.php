<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <title>Citra Mart</title>
  </head>
  <body>
    <div class="container-fluid">
    <br><br>
    <h1 style="text-align: center">Masukkan username dan password</h1>
    <br><br><br><br>
    <form class="form-horizontal" action="loginsession.php" method="post">
      <div class="form-group">
        <label class="control-label col-sm-4" for="username">Username</label>
        <div class="col-sm-1"></div>
        <div class="col-sm-2">
          <input type="text" class="form-control" style="border-radius:0px" id="username" placeholder="Enter email" name="username" required autofocus>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="password">Password</label>
        <div class="col-sm-1"></div>
        <div class="col-sm-2">        
          <input type="password" class="form-control" id="password" style="border-radius:0px" placeholder="Enter password" name="password" required>
        </div>
      </div>
      <br><br><br><br><br>
      <div class="form-group">        
        <div class="col-xs-offset-4 col-xs-10">
          <button type="submit" class="btn btn-primary col-xs-2" style="border-radius:0px">Login</button>
          <a href="lupapassword.php" class="btn btn-default col-xs-2" style="border-radius:0px">Lupa Password</a>
        </div>
      </div>
      <br>
      <?php
        if(isset($_GET['messages'])){
          if($_GET['messages'] == 1){
            echo "<p style='text-align: center;color:red'>Username atau Password Salah</p>";
          }
        }
      ?>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

  </body>
</html>