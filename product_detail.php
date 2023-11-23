<?php
    include'header.php';
    include'connect.php';
?>
<head>

    <style>
    .other-image { 
        width: 100%;
    }
    /* .img-detail {
        width: 100%;
        height: 100%;
    } */
    .mt {
        margin-top: 90px;
    }
    .img-product {
          max-height: 100%;
          object-fit: cover;
          width: 182px;
          height: 150px;
          object-position: 0px 0px;
      }
    </style>
</head>
<?php
include'nav.php';
?>
<?php
    if(isset($_GET['link'])){
        $product_data = $_GET['link'];
        $product_query="Select * from `products` where product_title like '%$product_data%'";
        $result_query=mysqli_query($connect,$product_query);
        while($row=mysqli_fetch_assoc($result_query)) {
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_image2 = $row['product_image2'];
            $product_image3 = $row['product_image3'];
            $product_price = $row['product_price'];
            echo "<div class='container mt' >
            <div class='row'>
                <div class='col-md-6'>
                    <div class='card'>
                        <img class='rounded card-img' src='/babershop design/product_images/$product_image1';/>
                    </div>
                    <div class='other-image row mt-4 m-auto'>
                        <img class='img-product rounded col-sm-4' src='/babershop design/product_images/$product_image1'  alt='...'>
                        <img src='/babershop design/product_images/$product_image2' class=' rounded col-sm-4  img-product' alt='...'>
                        <img src='/babershop design/product_images/$product_image3' class='rounded col-sm-4 img-product' >  
                    </div>
                    
                </div>
        
                <div class='col-md-6'>
                    <h4>$product_title</h4>
                    <p> $product_description</p>
                    <h5>Price: $product_price </h5>
                    <p>Quantity Order</p>
                    <input type='number' class='form-control' name='' aria-describedby='helpId' min='1' ax='10'>
                    <br>
                    <a role='button' class='btn btn-success'>Add to Cart</a>
                </div>
        
            </div>        
        </div>";
        }
    }

?>
<!-- <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <img class="rounded card-img" src="/babershop design/product_images/kemei 1977 img1.jpg" style="width:100%";/>
            </div>
            <div class="other-image row mt-4">
                <img class="rounded col-sm-4 img-fluid img-detail" src="/babershop design/product_images/kemei 1977 img2.jpg"  alt="...">
                <img src="/babershop design/product_images/kemei 1977 img3.jpg" class="img-detail rounded col-sm-4 img-fluid" alt="...">
                <img src="/babershop design/product_images/kemei 1977 img1.jpg" class="rounded col-sm-4 img-fluid img-detail" >  
            </div>
            
        </div>

        <div class="col-md-6">
            <h4>Product Title</h4>
            <p>Price</p>
            <p>Product-detail</p>
            <p>Quantity</p>
            <input type="number" class="form-control" name="" aria-describedby="helpId" min="1" ax="10">
            <br>
            <a role="button" class="btn btn-success">Add to Cart</a>
        </div>

    </div>        
</div> -->