<?php
include 'connect.php';

//getting product
function getProduct() {
    global $connect;
    $select_query="Select * from `products`";
    $result_query=mysqli_query($connect,$select_query);
    while($row=mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_price'];
        $category_id= $row['category_id'];
        echo "<div class='col-sm-4 mb-2'>
        <div class='card h-100 d-flex flex-column '>
            <img src='/babershop design/product_images/$product_image1' alt='$product_title' class='card-img-top img-product'>
            <div class='card-body '>
                <h5 class='card-title'>$product_title</h5>
                <p class='card-text'>$product_description</p>
                </div>
            <div class='align-self-start ms-2 mb-2'>
                <a href='' class='btn btn-brand'>$product_price</a>
                
                <a href='product_detail.php?link=$product_title' class='btn btn-info'>More information</a>
            </div>

        </div>
        </div>";
    }
}

// searching product
function search_product() {
    global $connect;
    if(isset($_GET['search_data_product'])) {
        $search_data_product=$_GET['search_data'];
        $search_query="Select * from `products` where product_keywords like '%$search_data_product%'";
        $result_query=mysqli_query($connect,$search_query);
        $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_rows == 0) {
            echo "<h2 class='text-center text-danger'> No results match!! </h2>";
        }
        while($row=mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $category_id= $row['category_id'];
            echo "<div class='col-md-4 mb-2'>
            <div class='card'>
                <img src='/babershop design/product_images/$product_image1' alt='$product_title' class='card-img-top img-product'> 
                <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <a href='' class='btn btn-brand'>$product_price</a>
                    <a href='product_detail.php?link=$product_title' class='btn btn-info'>More information</a>
                </div>
            </div>
        </div>";
        }
    }
}

function retrieve_product(){
    global $connect;
    $retrieve_query="Select * from `products`";
    $result_query=mysqli_query($connect,$retrieve_query);

    $xml=new DOMDocument("1.0");
    $xml->formatOutput=true;
    $products=$xml->createElement("PRODUCTS");
    $xml->appendChild($products);

    while($row=mysqli_fetch_array($result_query)) {
        $product=$xml->createElement("PRODUCT");
        $products->appendChild($product);

        $product_title=$xml->createElement("TITLE",$row['product_title']);
        $product->appendChild($product_title);

        $product_price=$xml->createElement("PRICE",$row['product_price']);
        $product->appendChild($product_price);

        $product_image2=$xml->createElement("IMAGE",$row['product_image2']);
        $product->appendChild($product_image2);

    }
    //echo "xmp".$xml->saveXML()."</xmp";
    $xml->save("products.xml");
}
?>