<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration</title>
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
          <?php
            if(!isset($_SESSION['username'])){
              echo 
              "<li class='nav-item active'>
              <a class='nav-link' href='login.php'
              >Login <span class='sr-only'>(current)</span></a>
              </li>";
            }
            if(isset($_SESSION['username'])){ 
              echo 
              "<li class='nav-item active'>
              <a class='nav-link' href='logout.php'
              >Logout <span class='sr-only'>(current)</span></a>
              </li>";
            }
              
            ?>
            <?php
            if(!isset($_SESSION['username'])){
              echo 
              "<li class='nav-item active'>
              <a class='nav-link' href='catalogue.php'
              >Find your next Read!<span class='sr-only'>(current)</span></a>
              </li>";
            }
            if(isset($_SESSION['username'])){ 
              echo 
              "<li class='nav-item active'>
              <a class='nav-link' href='select.php'
              >Find your next Read!<span class='sr-only'>(current)</span></a>
              </li>";
            }
              
            ?>
          <!-- <li class="nav-item">
            <a class="nav-link" href="catalogue.php">Find your next Read!</a>
          </li> -->
        </ul>
      </div>
    </nav>

    <div class="wrapper">
      <div class="title">Registration Form</div>
      <form action="insert.php" method="POST">
        <div class="field">
          <input type="text" name="username" required />
          <label>Username</label>
        </div>
        <div class="field">
          <input type="text" name="email" required />
          <label>Email Address</label>
        </div>
        <div class="field">
          <input type="password" name="password" required />
          <label>Password</label>
        </div>
        <!-- <div class="content">
          <div class="pass-link">
            <a href="registration.php">Forgot password?</a>
          </div>
        </div> -->
        <div class="field">
          <input type="submit" value="Register" />
        </div>
        <!-- <div class="signup-link">
          Not a member? <a href="registration.php">Signup now</a>
        </div> -->
      </form>
    </div>
  </body>
</html>
