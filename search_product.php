<?php
session_start();
include'header.php';
include'connect.php';
include'common_function.php';
?>
<!doctype html>
<html lang="en">
  <head>
  </head>
  <body id ="home" data-bs-spy="scroll" data-bs-target=".navbar">
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
                <a class="nav-link" href="#blog">Blogs</a>
              </li>
              <?php
                if(isset($_SESSION['email']) && isset($_SESSION['submit'])){
                ?>
                <?php
                    if($_SESSION['email'] == "administrator@gmail.com"){
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="insertNewProduct.php">Insert Items</a>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="insert_category.php">Insert Category</a>
                    </li>
                
                <?php
                }
                ?>
                <a href="logout.php" class="btn btn-outline-brand ms-lg-3 margin-r">Logout</a>

                <?php
                echo $_SESSION['email'];
                if($_SESSION['email'] == "administrator@gmail.com"){
                    echo "<br>Admin";
                }
                else{
                    echo "<br>Customer";
                }
                }
                else {
                ?>
                <a href="index.php?page=login" class="btn btn-outline-brand ms-lg-3 margin-r">Login</a>
                <?php
                }
                ?>
            </ul>
          </div>
        </div>
      </nav>
    <!--NAVBAR-->
    
    <!--PRODUCT-->
    <div class="productHead">
        <h1>Products</h1>
    </div>
    <div class="container mt-4">
         <form id="searchForm" action="search_product.php" method="get">
            <div class="input-group mb-3">
                <input type="text" class="form-control signup-form" id="searchInput" name="search_data" placeholder="Search for products" aria-label="Search for products" aria-describedby="searchButton">
                <input type="submit" class="btn btn-brand" value="Search" name="search_data_product">
            </div>
        </form>
        <div id="searchResults">
        </div>
    </div>

    <div class="row px-1 ">
        <div class="col-md-10 m-auto">
            <!-- product -->
            <div class="row">
                <?php
                  search_product(); 
                    
                ?>
            </div>
        </div>
    </div>
              
  </body> 
</html>