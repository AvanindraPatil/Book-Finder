<?php
session_start();
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
    <link rel="stylesheet" href="css/select.css">
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/style.css">
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
    <div class="container">
      <div id="title" class="center">
        <h1 id="header" class="text-center mt-5">Search your Next Read!</h1>
        <div class="row">
          <div id="input" class="input-group mx-auto col-lg-6 col-md-8 col-sm-12">
            <input id="search-box" type="text" class="form-control" placeholder="Search Books!...">
            <button id="search" class="btn btn-primary" onclick="">Search</button>
        </div>
        </div>
      </div> 
      <div class="book-list" >
          <h2 class="text-center">Here are the best books for you</h2>
          <div id="list-output" class="">
            <div class="row">
              <!-- card  -->
            </div>
          </div>
        </div>
    </div>
  
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>\
    <script src="js/app.js"></script>
  </body>
</html>
