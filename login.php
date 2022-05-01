<?php

$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "book4u";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    
$login = false;
$showerror = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT *  FROM customerdata WHERE username = '$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if($num==1){
    $login = true;
    session_start();
    $rem = $_POST["remember"];
    if(!empty($_POST["remember"])){
        setcookie("username",$_POST["username"],time()+600);
        setcookie("password",$_POST["password"],time()+600);
    }
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_COOKIE['username'] = $username;
    
    header('Location: select.php');
}
else{
    $showerror= "Invalid Credentials";
}
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/login.css" />
  </head>

  <body>
    <nav class="navbar navbar-expand-lg fixed-top">
      <a class="navbar-brand" href="index.php">Book4U</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="login.php"
              >Login <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="catalogue.php">Find your next Read!</a>
          </li>
        </ul>
      </div>
    </nav>

      <?php
    if($login) {
      echo '   
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Success!</strong> You have successfully logged in.</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
    }
    if($showerror) {
      echo '   
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Invalid Credentials.</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
    }
    ?>

    <div class="wrapper">
      <div class="title">Login Form</div>
      <form action="#" method="POST">
        <div class="field">
          <input type="text" name="username" required />
          <label>Username</label>
        </div>
        <div class="field">
          <input type="password" name="password" required />
          <label>Password</label>
        </div>
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" id="remember-me" />
            <label for="remember-me">Remember me</label>
          </div>
          <!-- <div class="pass-link">
            <a href="registration.php">Forgot Password?</a>
          </div> -->
        </div>
        <div class="field">
          <input type="submit" value="Login" />
        </div>
        <!-- inline-css -->
        <div class="signup-link" style="color: #262626">
          Not a member? <a href="registration.php">Signup now</a>
        </div>
      </form>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
