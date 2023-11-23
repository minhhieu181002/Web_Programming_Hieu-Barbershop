<?php
    session_start();
    include'header.php';
    include 'connect.php';
?>
<head>
<style>
/* Blog CSS */
.title_blog {
    color: var(--brand);
    text-decoration: none;
}
.read_article  {
    color:var(--white);
}

.blog {
    margin-top:100px;
}
a:hover {
      cursor: pointer;
}
</style>
<link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body id ="home" data-bs-spy="scroll" data-bs-target=".navbar">
<!--NAVBAR-->
<nav class="navbar navbar-expand-lg navbar-dark ">
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
                <a class="nav-link" href="index.php?page=blog">View Blogs</a>
              </li>
              <?php
                if(isset($_SESSION['email']) && isset($_SESSION['submit'])){
                ?>
                <?php
                    if($_SESSION['email'] == "admin@gmail.com"){
                ?>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php?page=blog">Add Blogs</a>
                  </li>
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

<div class="container blog">
    <div class="row">
        <div class="col-sm-10 m-auto">
            <a class="title_blog text-center" href="display_blog.php">
                <h1> How to cut undercut hairstyle for men </h1>
            </a>
            <p class="text-center">NOVEMBER 22, 2023 BY MINH HIEU</p>
            <div class="">
                <img class="rounded" src="/babershop design/blog img/undercut_minh.jpg" alt="Undercut Hairstyle Image" ">
            </div>
            <p class="blog_content read_article " id="blogContent">
            The undercut hairstyle is a popular choice known for its versatility and modern appeal. Whether you're going for a subtle or bold look, mastering the undercut requires precision and attention to detail.
            <a class="read_article" onclick="loadDoc()">[read more...]
            </a>
            </p>
               
            </div>
        </div>
    </div>
</div>
</body>

<script>
    function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", "blog.txt", false);
    xhttp.send();
    document.getElementById("blogContent").innerHTML = xhttp.responseText;
}
</script>

