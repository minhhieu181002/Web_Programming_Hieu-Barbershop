<?php
include'connect.php';

$hint_data = $_GET['q'];
$search_query="Select * from `products` where product_keywords like '%$hint_data%'";

$result_query=mysqli_query($connect,$search_query);
$num_of_rows=mysqli_num_rows($result_query);
if($num_of_rows==0) {
    echo "<a href='product_detail.php' class='list-group-item list-group-item-action border-1' id='txtHint'>Cannot found the product</a>";
}
else{ 

    while($row=mysqli_fetch_assoc($result_query)) {
        $product_title = $row['product_title'];
        echo "<a href='product_detail.php?link=$product_title' method='get' class='list-group-item list-group-item-action border-1' id='txtHint'>$product_title</a>";
    }
}
// $row=mysqli_fetch_assoc($result_query);
// $product_title = $row['product_title'];
// echo "<a href='#' class='list-group-item list-group-item-action border-1' id='txtHint'>$product_title</a>";
// echo "<a href='#' class='list-group-item list-group-item-action border-1' id='txtHint'>$product_title</a>";
// get the q parameter from URL
// $q = $_REQUEST["q"];

// $hint = "";

// lookup all hints from array if $q is different from ""
// if ($q !== "") {
//   $q = strtolower($q);
//   $len=strlen($q);
//   foreach($a as $name) {
//     if (stristr($q, substr($name, 0, $len))) {
//       if ($hint === "") {
//         $hint = $name;
//         //echo "<a href='#' class='list-group-item list-group-item-action border-1' id='txtHint'>$hint</a>";
//       } else {
//         $hint .= ", $name";
//       }
//     }
//   }
// }

// // Output "no suggestion" if no hint was found or output correct values
 //echo $hint === "" ? "no suggestion" : $hint;
// ?>