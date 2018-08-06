<!DOCTYPE html>
<?php

    if(isset($_GET['msg'])){
    $msg = $_GET['msg'];
    }else $msg = 0;

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="theme.css">
    <script type="text/javascript" src="bs/js/bootstrap.js">
    </script>
    <title>Login</title>
  </head>
  <body onload="starter()">
    <nav class="navbar navbar-default justify-content-between" style="background-color:rgba(0,0,0,.9);color:white;">
  <a class="navbar-brand">E-WEB</a>
  <form class="form-inline" method="post" action="script_login.php">
    <input type="text" name="uname" value="" placeholder="UserName">
    <input type="password" name="password" value="" placeholder="Password">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
  </form>
</nav>
    <div class="container">
      <div class="row">
        <div class="signup">
          <p class="text-center headings">Sign-Up</p>
              <form action="script_add_user.php" method="post">
            <input type="text" name="fn" value="" required autocomplete="off" >
            <label for="fn">First Name</label>
            <input type="text" name="ln" value="" required autocomplete="off">
            <label for="ln">Last Name</label>
            <input type="password" name="pwd" value="" required autocomplete="off">
            <label for="pwd">Password</label>
            <input onkeyup="validateEmail(this.value)" type="text" name="email" value="" required autocomplete="off">
            <label for="email" >Email</label>
            <span id="checkmail" class="" >Email Taken</span>
            <p class="text-center"><span style="display:none;" id="msg"></span> <br><input id="btn0" type="submit" name="" value="Sign-Up" class="btn btn-outline-light btn-sm"></p></form>



        </div>
      </div>
    </div>
    <script>
    function validateEmail(value){
      if (value.length == 0 ) {
        document.getElementById('checkmail').innerHTML = "in if";
        return;
      }else {

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById('checkmail').innerHTML = this.responseText;
          }
        };
        document.getElementById('checkmail').innerHTML = "in function";
        xmlhttp.open("GET", "validate_email.php?q=" + value, true);
        xmlhttp.send();
      }
    }
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
