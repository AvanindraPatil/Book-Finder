<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Catalogue</title>

    <link rel="stylesheet" href="css/catalogue.css" />
    <link rel="stylesheet" href="css/app.css" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
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
    <div class="book-list">
      <h1><a href="login.php" class="text-center">Login to find your Next Read</a></h1>
    </div>
    <!-- 
<div id="large-th">
  <div class="container" style="max-width:2000px" >
    <h1> A list of books</h1>
    <br>
    <div id="list-th">
      <div class="book read">
        <div class="cover">
          <img src="https://s-media-cache-ak0.pinimg.com/564x/f9/8e/2d/f98e2d661445620266c0855d418aab71.jpg">
        </div>
        <div class="description">
          <p class="title">Frankenstein<br>
            <span class="author">Mary Shelley</span></p>
        </div>
      </div>
      <div class="book read">
        <div class="cover">
          <img src="https://alysbcohen.files.wordpress.com/2015/01/little-princess-book-cover.jpg">
        </div>
        <div class="description">
          <p class="title">A Little Princess<br>
            <span class="author">Frances Hodgson Burnett</span></p>
        </div>
      </div>
      <div class="book read">
        <div class="cover">
          <img src="http://www.publishersweekly.com/images/data/ARTICLE_PHOTO/photo/000/028/28129-1.JPG">
        </div>
        <div class="description">
          <p class="title">Roughing It</br>
            <span class="author">Mark Twain</span></p>
        </div>
      </div>
      <div class="book read">
        <div class="cover">
          <img src="http://talkingwriting.com//sites/default/files/Bird-by-Bird-image1.jpg">
        </div>
        <div class="description">
          <p class="title">Bird By Bird</br>
            <span class="author">Anne Lamott</span></p>
        </div>
      </div>
<div class="book read">
        <div class="cover">
          <img src="http://d.gr-assets.com/books/1414348859l/23209971.jpg">
        </div>
        <div class="description">
          <p class="title">Girl at War</br>
            <span class="author">Sara Novic</span></p>
        </div>
      </div>
<div class="book read">
        <div class="cover">
          <img src="http://prodimage.images-bn.com/pimages/9780062315007_p0_v2_s192x300.jpg">
        </div>
        <div class="description">
          <p class="title">The Alchemist</br>
            <span class="author">Paulo Coelho</span></p>
        </div>
      </div>
<div class="book read">
        <div class="cover">
          <img src="http://eastchapelhillobserver.com/wp-content/uploads/2015/02/amazondotcom.jpg">
        </div>
        <div class="description">
          <p class="title">Anne of Green Gables</br>
            <span class="author">Lucy Maud Montgomery</span></p>
        </div>
      </div>
<div class="book read">
        <div class="cover">
          <img src="http://www.penguinbooksindia.com/sites/default/files/book_image/9780143416319.jpg">
        </div>
        <div class="description">
          <p class="title">Animal Farm</br>
            <span class="author">George Orwell</span></p>
        </div>
      </div>

    </div>
  </div>
</div> -->
  </body>
</html>
