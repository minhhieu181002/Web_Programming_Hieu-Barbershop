<?php
session_start();
include'header.php'
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
                    if($_SESSION['email'] == "admin@gmail.com"){
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="insertNewProduct.php">Insert Items</a>
                      </li>
                    
                
                <?php
                }
                ?>
                <a href="logout.php" class="btn btn-outline-brand ms-lg-3 margin-r">Logout</a>

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
    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 mb-2-6">
                <div class="card-wrapper mb-4">
                    <div class="card-img"><img src="/babershop design/img/magic walh.jfif" alt="..."></div>
                    <div class="card-body">
                        <div>
                            <a href="#"><i class="bg-white p-3 rounded-circle ti-shopping-cart font-weight-600"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h4 class="h5 mb-2"><a href="#" class="text-secondary">Wahl Hair-Clipper</a></h4>
                    <div class="product-rating mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star mr-0"></i>
                    </div>
                    <h5 class="mb-0 text-primary">$11.79</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-2-6">
                <div class="card-wrapper mb-4">
                    <div class="card-img"><img src="/babershop design/img/tong do 3.jpg" alt="..."></div>
                    <div class="card-body">
                        <div>
                            <a href="#"><i class="bg-white p-3 rounded-circle ti-shopping-cart font-weight-600"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h4 class="h5 mb-2"><a href="#" class="text-secondary">Trimmer</a></h4>
                    <div class="product-rating mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star mr-0"></i>
                    </div>
                    <h5 class="mb-0 text-primary">$20.00</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-2-6">
                <div class="card-wrapper mb-4">
                    <div class="card-img"><img src="/babershop design/img/tong-do-zsz-f52-luoi-kep.jpg" alt="..."></div>
                    <div class="card-body">
                        <div>
                            <a href="#"><i class="bg-white p-3 rounded-circle ti-shopping-cart font-weight-600"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h4 class="h5 mb-2"><a href="#" class="text-secondary">ZSL Hair-Clipper</a></h4>
                    <div class="product-rating mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star mr-0"></i>
                    </div>
                    <h5 class="mb-0 text-primary">$19.22</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-2-6">
                <div class="card-wrapper mb-4">
                    <div class="card-img"><img src="/babershop design/img/comb.png" alt="..."></div>
                    <div class="card-body">
                        <div>
                            <a href="#"><i class="bg-white p-3 rounded-circle ti-shopping-cart font-weight-600"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h4 class="h5 mb-2"><a href="#" class="text-secondary">Comb</a></h4>
                    <div class="product-rating mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star mr-0"></i>
                    </div>
                    <h5 class="mb-0 text-primary">$5</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-2-6 mb-lg-0">
                <div class="card-wrapper mb-4">
                    <div class="card-img"><img src="/babershop design/img/clay.webp" alt="..."></div>
                    <div class="card-body">
                        <div>
                            <a href="#"><i class="bg-white p-3 rounded-circle ti-shopping-cart font-weight-600"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h4 class="h5 mb-2"><a href="#" class="text-secondary">Clay</a></h4>
                    <div class="product-rating mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star mr-0"></i>
                    </div>
                    <h5 class="mb-0 text-primary">$129.79</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-2-6 mb-lg-0">
                <div class="card-wrapper mb-4">
                    <div class="card-img"><img src="/babershop design/img/Reuzel Pink.jfif" alt="..."></div>
                    <div class="card-body">
                        <div>
                            <a href="#"><i class="bg-white p-3 rounded-circle ti-shopping-cart font-weight-600"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h4 class="h5 mb-2"><a href="#" class="text-secondary">Reuzel Pomade</a></h4>
                    <div class="product-rating mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star mr-0"></i>
                    </div>
                    <h5 class="mb-0 text-primary">$44.42</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-2-6 mb-sm-0">
                <div class="card-wrapper mb-4">
                    <div class="card-img"><img src="/babershop design/img/classic scissor.jfif" alt="..."></div>
                    <div class="card-body">
                        <div>
                            <a href="#"><i class="bg-white p-3 rounded-circle ti-shopping-cart font-weight-600"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h4 class="h5 mb-2"><a href="#" class="text-secondary">Kovira Scissor</a></h4>
                    <div class="product-rating mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star mr-0"></i>
                    </div>
                    <h5 class="mb-0 text-primary">$24.69</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card-wrapper mb-4">
                    <div class="card-img"><img src="/babershop design/img/Salon Chair Recliner.webp" alt="..."></div>
                    <div class="card-body">
                        <div>
                            <a href="#"><i class="bg-white p-3 rounded-circle ti-shopping-cart font-weight-600"></i></a>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <h4 class="h5 mb-2"><a href="#" class="text-secondary">Salon Chair</a></h4>
                    <div class="product-rating mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star mr-0"></i>
                    </div>
                    <h5 class="mb-0 text-primary">$79.79</h5>
                </div>
            </div>
        </div>
    </div>
</section>
  </body> 
</html>