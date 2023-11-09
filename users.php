<?php
session_start();
include 'header.php'
?>

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
                <a class="nav-link" href="products.php">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#blog">Blogs</a>
              </li>
              
            </ul>
            <a href="logout.php" class="btn btn-outline-brand ms-lg-3 margin-r">Logout</a>
            <?php
            if(isset($_SESSION['email']) && isset($_SESSION['submit'])){
              echo $_SESSION['email'];
              if($_SESSION['email'] == "admin@gmail.com"){
                echo "<br>Admin";
              }
              else{
                echo "<br>Customer";
              }
            }
            ?>
          </div>
        </div>
</nav>
<div class="container contain-one">
    <div class="row">
        <div class="col-md-6 user-infor">
            <h2 class="panel-heading">User Dashboard</h2>
            <!-- User information and data goes here -->
            <div class="user-infor">
                <p>Number of haircuts: 5</p>
                <p>Previous style: Short and neat</p>
                <p>Time: 11:30 AM</p>
                <p>Products purchased: Shampoo, Conditioner</p>
            </div>
        </div>
        <div class="col-md-6">
            <img src="/babershop design/img/huyhair.jpg" alt="User's haircut" class="img-fluid rounded user-img">
        </div>
    </div>
</div>
<div class="container contain-one">
    <div class="row">
        <div class="col-md-6">
            <h2 class="panel-heading">User Dashboard</h2>
            <!-- User information and data goes here -->
            <div class="user-infor">
                <p>Number of haircuts: 5</p>
                <p>Previous style: Short and neat</p>
                <p>Time: 11:30 AM</p>
                <p>Products purchased: Shampoo, Conditioner</p>
            </div>
        </div>
        <div class="col-md-6">
            <img src="/babershop design/img/huyhair2.jpg" alt="User's haircut" class="img-fluid rounded user-img">
        </div>
    </div>
</div>