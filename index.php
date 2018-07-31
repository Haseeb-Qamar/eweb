<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bs/css/bootstrap.css">
    <link rel="stylesheet" href="stylesheet/theme.css">
    <script type="text/javascript" src="bs/js/bootstrap.js">
    </script>
    <title>Login</title>
  </head>
  <body>
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
          <p class="text-center">Sign-Up</p>
          <div class="inputs">

            <input type="text" name="fn" value="" placeholder="First Name">

            <input type="text" name="ln" value="" placeholder="Last Name">

            <input type="password" name="" value="" placeholder="Password">

            <input type="email" name="email" value="" placeholder="Email">
            <p class="text-center"><input id="btn0" type="submit" name="" value="Sign-Up" class="btn btn-outline-light btn-sm"></p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
