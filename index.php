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
  <body onload="showdate()">
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

              <form name="signupform" action="script_add_user.php" onsubmit="return redirect()" method="post">

            <input id="fnfield" type="text" name="fn" value=""  required autocomplete="off" >
            <label for="fn">First Name</label>

            <input type="text" name="ln" value="" required autocomplete="off">
            <label for="ln">Last Name</label>

            <input type="password" name="pwd" value="" required autocomplete="off">
            <label for="pwd">Password</label>

            <input type="text" name="uname" value="" required autocomplete="off">
            <label for="pwd">User Name</label>

            <span id="icontag" class="tick"> <div id="msg1" class="mesg">Email Already Registered</div> </span>
            <input id="email" onfocusout="validateEmail(this.value)" type="text" name="email" value="" required autocomplete="off">

            <label for="email" >Email</label>

            <p class="text-center"><input id="btn0" type="submit" name="" value="Sign-Up" class="btn btn-outline-light btn-sm"></p></form>



        </div>

      </div>

    </div>
    <div class="marquee">
      <marquee scrollamount=15 > <span id="marquee"></span> </marquee>
    </div>
    <script>
var check = 0;
var email = 0;
    function redirect(){
      if (check == 1) {
        return true;
      }
      if (check == 0) {
        alert("Error! Email Validation Failed.");
        return false;
      }
    }
    function validateEmail(value){

      var atcount = 0;
      if (value.length == 0 ) {
        var icon = document.getElementById('icontag');
        icon.innerHTML = "";
        document.getElementById('email').style.width="100%";
        document.signupform.email.style.borderBottom="1px solid white";
        document.getElementById('checkmail').innerHTML = "";
        return;
      }else {
        var email = document.getElementById('email');

        for (var i = 0; i < email.value.length; i++) {

          if (email.value[i] == '@') {
            atcount++;

          }


          }
          if (atcount == 1) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {

                if (this.responseText == 'available') {
                  var icon = document.getElementById('icontag');
                  icon.style.display="block";
                  icon.style.color="green";
                  document.getElementById('email').style.width="85%";
                  document.signupform.email.style.borderBottom="1px solid green";
                  icon.innerHTML = "<img src='assets/check.png'  title='Email Available'>";
                  check = 1;
                }
                if (this.responseText == 'unavailable') {
                  var icon = document.getElementById('icontag');
                  icon.style.display="block";
                  icon.style.color="red";
                  document.getElementById('email').style.width="85%";
                  document.signupform.email.style.borderBottom="1px solid red";
                  icon.innerHTML = "<img src='assets/cross.png' title='Email Unavailable'></span><div id='msg1'><img class='imgmsg' src='assets/msg.png' onclick='hide(this)'></div>";

                  check = 0;
                }
              }

            };

            xmlhttp.open("GET", "validate_email.php?q=" + value, true);
            xmlhttp.send();
          }else {
            var icon = document.getElementById('icontag');
            icon.style.display="block";
            document.getElementById('email').style.width="85%";
            icon.innerHTML = "<img src='assets/cross.png' title='Email Unavailable'></span><div id='msg1'><img class='imgmsg' src='assets/invalid.png' onclick='hide(this)'></div>";
            email = 0;

          }

        }


    }
    function hide(x){

      x.style.display="none";
    }
    function showdate(){
      n = new Date();
      y = n.getFullYear();
      m = n.getMonth() + 1;
      d = n.getDate();
      document.getElementById("marquee").innerHTML = m + "/" + d + "/" + y;

    }


    </script>
  </body>
</html>
