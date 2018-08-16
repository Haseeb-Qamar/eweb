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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script type="text/javascript" src="bs/js/bootstrap.js">
    </script>
    <title>Login</title>
  </head>
  <body>
    <nav class="navbar navbar-default justify-content-between" style="background-color:rgba(0,0,0,.9);color:white;">
  <a class="navbar-brand">E-WEB</a>
  <form class="form-inline" method="post" action="script_login.php">
    <input type="text" name="uname" value="" placeholder="E-mail" autocomplete="off">
    <input type="password" name="password" value="" placeholder="Password">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
  </form>
</nav>

    <div class="container">
      <div class="row">

        <div class="signup">

          <p class="text-center headings">Sign-Up</p>
<div id="msg1" class="mesg">Error!<br>Email Already Registered</div>
              <form name="signupform" action="script_add_user.php" onsubmit="return redirect()" method="post">

            <input id="fnfield" type="text" name="fn" value=""  required autocomplete="off" >
            <label for="fn">First Name</label>

            <input type="text" name="ln" value="" required autocomplete="off">
            <label for="ln">Last Name</label>

            <input type="password" name="pwd" value="" required autocomplete="off">
            <label for="pwd">Password</label>

            <span id="icontag" onmouseover="mouseovericon(this)" onmouseout="mouseawayicon(this)"class="tick"> <img src="assets/exca.png" alt=""> </span>

            <input id="email" onfocusout="validateEmail(this.value)" type="text" name="email" value="" required autocomplete="off">

            <label for="email" >Email</label>
            <p id="checkmail" class="" ></p>
            <p class="text-center"><input id="btn0" type="submit" name="" value="Sign-Up" class="btn btn-outline-light btn-sm"></p></form>



        </div>

      </div>
    </div>
    <script>
var check = 0;
    function redirect(){
      if (check == 1) {
        return true;
      }
      if (check == 0) {
        alert("Email is already registered!");
        return false;
      }
    }
    function validateEmail(value){


      if (value.length == 0 ) {
        var icon = document.getElementById('icontag');
        icon.innerHTML = "<img src='assets/exca.png' alt='Enter Email'>";
        icon.style.color="orange";
        document.signupform.email.style.borderBottom="1px solid white";
        document.getElementById('checkmail').innerHTML = "";
        return;
      }else {

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {

            if (this.responseText == 'available') {
              var icon = document.getElementById('icontag');
              icon.style.display="block";
              icon.style.color="green";
              document.signupform.email.style.borderBottom="1px solid green";
              icon.innerHTML = "<img src='assets/check.png' alt='Enter Email'>";
              check = 1;
            }
            if (this.responseText == 'unavailable') {
              var icon = document.getElementById('icontag');
              icon.style.display="block";
              icon.style.color="red";
              document.signupform.email.style.borderBottom="1px solid red";
              icon.innerHTML = "<img src='assets/cross.png' alt='Enter Email'>";
              document.getElementById('msg1').innerHTML="Error!";
              check = 0
            }
          }

        };

        xmlhttp.open("GET", "validate_email.php?q=" + value, true);
        xmlhttp.send();
      }
    }
    function mouseovericon(x){

    }
    function mouseawayicon(x){

    }


    </script>
  </body>
</html>
