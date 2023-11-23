<?php 
include 'header.php';
include 'connect.php';
if(isset($_POST['insert_cat'])) {
    $category_title=$_POST['cat_title'];
    //select data from database
    $select_query="Select * from `categories` where category_title='$category_title'";
    $result_select=mysqli_query($connect,$select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0) {
        echo "<script>alert('This category is present inside the database')</script>";
    }
    else{
        $insert_query="insert into `categories` (category_title) values ('$category_title')";
        $result=mysqli_query($connect,$insert_query);
        if($result) {
        echo "<script>alert('Category has been inserted successfully')</script>";
        }
    }
    
}
?>

<form action="insert_category.php" method="post" class="mb-2">
    <div class="input-group w-50 p-3 mb-2 m-auto">
        <span class="input-group-text btn-brand login-form" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control login-form " name="cat_title" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-2 p-3 w-50 m-auto">
        <input type="submit" class="btn btn-brand p-2 border-0" value="Insert Category" name="insert_cat">
        
    </div>
</form>