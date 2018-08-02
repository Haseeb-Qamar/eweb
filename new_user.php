<?php
include "connection.php";
session_start();

?>
<html>
    <head> 
    <meta charset="utf-8">
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="theme.css">
    <script type="text/javascript" src="bs/js/bootstrap.js">
    </script>
    <title>Success!</title>
    </head>
    <body>
        <nav class="navbar navbar-default justify-content-between" style="background-color:rgba(0,0,0,.9);color:white;">
  <a class="navbar-brand">E-WEB</a>
  
</nav>
    <div class="container">
      <div class="row">
      <div id="welcome" class="col-sm-12">
      <div class="jumbotron">
  <h1 class="display-4">Hello, <?php echo $_SESSION['sfn'] ?>!</h1>
  <p class="lead">Thank you for creating an account!</p>
  <hr class="my-4">
  <p>Would you like to login now and explore?</p>
  <p class="lead">
    <a class="btn btn-outline-primary btn-lg" href="undercons.html" role="button">Login Now!</a>
  </p>
</div></div>
      
      </div>
    </div>
    </body>
</html>