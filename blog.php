<?php
    session_start();
    include 'header.php';
    include 'connect.php';
?>
<head>
<style>
/* Blog CSS */
.title_blog {
    color: var(--brand);
    text-decoration: none;
}
.read_article {
    color:var(--body);
}
.blog {
    margin-top:100px;
}

</style>
<link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
        <div class="col-sm-12 m-auto">
            <div class="row">
                
                <div class="col-sm-6">
                    <div class="">
                        <img src="/babershop design/blog img/undercut_minh.jpg" alt="Undercut Hairstyle Image" ">
                    </div>
                </div>
                <div class="col-sm-6">
                    <a class="title_blog" href="display_blog.php">
                        <h1> How to cut undercut hairstyle for men </h1>
                    </a>
                    <p>NOVEMBER 22, 2023 BY MINH HIEU</p>
                    <i class="fa-solid fa-dash"></i>
                    <p class="lead">
                    The undercut hairstyle is a trendy and versatile haircut that involves short or shaved sides and a longer top. With the right tools and techniques, you can achieve this stylish look....
                    <!-- Your blog content goes here -->
                    </p>
                    
                        <a class="read_article" href="display_blog.php">[read full article...]
                                <i class='fas fa-arrow-right px-2'></i>
                        </a>
        
                </div>
            </div>
        </div>
    </div>
</div>
</body> 


<!-- <script>
    document.getElementById("readMoreBtn").addEventListener("click", function() {
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        // Successful response received
        const additionalContent = xhr.responseText; // Assuming AJAX returns HTML content
        document.getElementById("blogContent").innerHTML += additionalContent;
      } else {
        // Handle error, if any
        console.error("Error fetching content:", xhr.status);
      }
    }
  };

  // Perform an AJAX request to fetch more content (replace URL with your endpoint)
  xhr.open("GET", "blog.txt");
  xhr.send();
});
</script>
 -->
