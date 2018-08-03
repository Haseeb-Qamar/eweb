<!DOCTYPE html>
<?php

if (isset($_GET['id'])) {
  $uname = $_GET['id'];
}else {
  $uname = "";
}

 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="theme.css">
    <script type="text/javascript" src="bs/js/bootstrap.js">
    </script>
    <title>Login</title>
  </head>
  <body>
    <nav class="navbar navbar-default justify-content-between" style="background-color:rgba(0,0,0,.9);color:white;">
  <a class="navbar-brand">E-WEB</a>
</nav>
    <div class="container">
      <div class="row">
        <div class="login">
          <p class="text-center headings">Login</p>
          <p class="text-danger text-center">Your Login Information is Invalid!<br><a href="index.php">Not <?php echo $uname ?>? </a> </p>
              <form action="script_login.php" method="post">
                <input type="text" name="uname" value="" required autocomplete="off">
                <label for="uname">User Name</label>
                <input type="password" name="password" value="" required autocomplete="off">
                <label for="password">Password</label>
                <p class="text-center"><input class="btn btn-outline-success my-2 my-sm-0"  type="submit" value="Login"></p>
          </form>



        </div>
      </div>
    </div>
    <script>
    function starter(){

    var code = <?php echo $msg ?>;

    if(code == 1){
        var m = document.getElementById('msg');
        m.innerHTML='Account Does Not Exist!';
        m.style.display="inline";
    }
    }

    </script>
  </body>
</html>
