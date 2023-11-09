<?php 
include 'header.php';
  $connect=mysqli_connect('localhost','root','','onlinestore');
  
  if(!$connect){
    die("FAILED QUERY");
  }

  

  if(isset($_POST['submit'])){
    $product=$_POST['product'];
    $price=$_POST['Price'];
    $image=$_POST['image'];

    $query="INSERT INTO products(Name,Price,Brand) VALUE('$product',$price,'$image')";
    $query_result=mysqli_query($connect,$query);

  }
?>
<h1 class="text-primary ">Insert new product</h1>
<form action = insertNewProduct.php method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product</label>
    <input type="text" class="form-control " name="product" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Price</label>
    <input type="text" class="form-control" name = "Price" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Image</label>
    <input type="text" class="form-control"  name="image" id="exampleInputPassword1">
  </div>
  <div>
    <input role="button" type="submit" class="btn btn-brand" value="submit" name="submit"> 
    <a href="index.php?page=products.php" class="btn btn-brand">Back To Products</a>
  </div>
</form>