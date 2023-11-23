<?php
  session_start();
  include'header.php';
?>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Hieu Barbershop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=products">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=blog">Blogs</a>
              </li>
              
            </ul>
            <?php
            if(isset($_SESSION['email']) && isset($_SESSION['submit'])){
              ?>
              <a href="logout.php" class="btn btn-outline-brand ms-lg-3 margin-r">Logout</a>
              <a href="index.php?page=users" class="btn btn-outline-brand ms-lg-3 margin-r">Dashboard</a>
              <?php
              echo $_SESSION['email'];
              if($_SESSION['email'] == "admin@gmail.com"){
                echo "<br>Admin";
              }
              else{
                echo "<br>Customer";
              }
            }
            else {
            ?>
              <a href="login.php" class="btn btn-outline-brand ms-lg-3 margin-r">Login</a>
            <?php
            }
            ?>
          </div>
        </div>
      </nav>
    <!--NAVBAR-->

    <!--COVER-->
    <section class="hero" style="background-image:url('img/cover.jpg');
    min-height: 100vh;
    background-position: center;
    background-size: cover;
    margin-top:80px
    ">
      <div class="container" >
        <div class="row">
          <div class="col-lg-6">
            <h1 class="home-cover">Let your hair do the talking</h1>
            <p class="home-cover">We always give you the best haircut</p>
            <a href="#" class = "btn btn-brand">Booking Now</a>
          </div>
        </div>
      </div>
    </section>
    <!--COVER-->
    

