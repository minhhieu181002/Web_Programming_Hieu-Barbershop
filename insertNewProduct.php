<?php 
include 'header.php';
include 'connect.php';
  if(isset($_POST['submit'])){
      $product_title= $_POST['product_title'];
      $product_description= $_POST['description'];
      $product_keywords= $_POST['keywords'];
      $product_categories= $_POST['product_categories'];
      $product_price= $_POST['product_price'];
      $product_status = 'true';

      // accessing image
      $product_image1= $_FILES['product_image1']['name'];$product_image2= $_FILES['product_image2']['name'];$product_image3= $_FILES['product_image3']['name'];

      //accessing image temp name
      $temp_image1= $_FILES['product_image1']['tmp_name'];$temp_image2= $_FILES['product_image2']['tmp_name'];$temp_image3= $_FILES['product_image3']['tmp_name'];

      //checking empty condition
      if($product_title=='' or $product_description=='' or $product_keywords=='' or $product_categories=='' or $product_price=='' or $product_image1=='' or $product_image2=='' or $product_image3=='' ) {
        echo "<script>alert('Please fill all the available fields') </script>";
        exit();
      }else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");

        // insert query
        $insert_product="insert into `products` (product_title,product_description,product_keywords,category_id,product_image1,product_image2,product_image3,product_price,date,status) values ('$product_title','$product_description','$product_keywords','$product_categories','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";

        $result_query=mysqli_query($connect,$insert_product);
        if($result_query) {
          echo "<script>alert('Insert the product successfully') </script>";
        }
      }
  }
?>

<div class="container mt-3">
  <h1 class="text-primary text-center">Insert new product</h1>
  <form action = insertNewProduct.php method="post" enctype="multipart/form-data">
    <div class="form-outline mb-4 w-50 m-auto">
      <!-- title -->
      <label for="product_title" class="form-label">Product title</label>
      <input type="text" class="form-control" name="product_title" placeholder="Enter product title" autocomplete="off" require="required">

      <!-- description -->
      <label for="description" class="form-label">Product description</label>
      <input type="text" class="form-control" name="description" id="description" placeholder="Enter product description" autocomplete="off" require="required">

      <!-- keywords -->
      <label for="keywords" class="form-label">Product keywords</label>
      <input type="text" class="form-control" id="keyword" placeholder="Enter product keywords"  name="keywords" autocomplete="off" require="required">
    </div>

    <!-- categories -->
    <div class="form-outline mb-4 w-50 m-auto">
      <select name="product_categories" id="" class="form-select">
        <option value="">Select a Category</option>
        <?php 
          $select_query="Select * from `categories`";
          $result_query=mysqli_query($connect,$select_query);
          while($row=mysqli_fetch_assoc($result_query)) {
              $category_title=$row['category_title'];
              $category_id=$row['category_id'];
              echo "<option value='$category_id'>$category_title</option>";
          }
        ?>

      </select>
    </div>

    <!-- image 1 -->
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="product_image1" class="form-label">
        Product image 1
      </label>
      <input type="file" name="product_image1" id="product_image1" require="required" class="form-control">
    </div>   
    <!--image 2  -->
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="product_image2" class="form-label">
        Product image 2
      </label>
      <input type="file" name="product_image2" id="product_image2" require="required" class="form-control">
    </div> 
    <!-- image 3 -->
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="product_image3" class="form-label">
        Product image 3
      </label>
      <input type="file" name="product_image3" id="product_image3" require="required" class="form-control">
    </div> 
    
    <!--Product Price -->
    <div class="form-outline mb-4 w-50 m-auto">
      <label for="price" class="form-label">Product price</label>
      <input type="text" class="form-control" id="price" name="product_price" placeholder="Enter product price" autocomplete="off" require="required">
    </div>
    <!-- button -->
    <div class="form-outline mb-4 w-50  m-auto" >
      <input role="button" type="submit" class="btn btn-brand mt-2" value="submit" name="submit"> 

      <a href="index.php?page=products.php" class="btn btn-brand mt-2 ">Back To Products</a>
    </div>
      
    
  
  </form>
</div>
