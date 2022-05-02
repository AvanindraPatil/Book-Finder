<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/app.css" />
    <title>Document</title>
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

    <section class="container-fluid px-0 mt-5">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div id="headingGroup" class="text-white text-center d-none d-lg-block mt-5">
            <h1 class="text-center display-2"><span>/</span>BOOK4U<span>/</span></h1>
            <h1 class="text-center display-2">FINDING<span>/</span>THE<span>/</span>PERFECT<span>/</span>BOOK</h1>
            <h1 class="text-center display-2">WAS<span>/</span>NEVER<span>/</span>EASIER</h1>
          </div>
        </div>
        <div class="col-lg-6">
          <img class="homeimg1" src="assets/book world.png" alt="">
        </div>
      </div>
    </section>
  
    <section class="container-fluid px-0 content">
      <div class="row align-items-center">
        <div class="col-md-6 order-2">
          <img class="img-fluid" src="assets/bookworld1.jpg" alt="">
        </div>
        <div class="col-md-6 text-center order-1 order-md-2">
          <div class="row justify-content-center blurb mb-5 mg-md-0">
            <div class="col-10 col-lg-8">
              <h2>Steps to a Good Read</h2>
              <img class="d-none d-md-inline" src="" alt="">
              <p class="lead text-center"><br>1. Go to Find A Book </br>
                <br>2. Tell us what you want </br>
                <br>3. Enjoy Reading!</br>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    

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
