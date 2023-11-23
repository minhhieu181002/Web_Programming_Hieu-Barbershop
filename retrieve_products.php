<!-- <?php
    include'connect.php';
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

?> -->