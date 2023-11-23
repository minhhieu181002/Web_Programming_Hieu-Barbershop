<?php
include'header.php';
include'common_function.php';
?>
<html>
<style>
table,th,td {
  border : 1px solid var(--brand);
  border-collapse: collapse;
}
img {
    width: 200px;
}
th,td {
  padding: 5px;
}
th {
    background-color: #fff;
}

</style>
<?php
    retrieve_product();
?>
    <div class="container">
        <button type="button" class="btn btn-brand" onclick="loadDoc()" >Get Data</button>
        <script>
            function loadDoc() {
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function() {
            myFunction(this);
            }
            xhttp.open("GET", "products.xml");
            xhttp.send();
        }
        function myFunction(xml) {
            const xmlDoc = xml.responseXML;
            const x = xmlDoc.getElementsByTagName("PRODUCT");
            let table="<tr><th class='text-center table-success'>Name</th><th class='text-center table-success'>Price</th><th class='text-center table-success  '>Image</th></tr>";
            for (let i = 0; i <x.length; i++) { 
            table += "<tr><td >" +
            x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
            "</td><td class='text-center'>" +
            x[i].getElementsByTagName("PRICE")[0].childNodes[0].nodeValue +
            "</td><td class='text-center'><img src=" +"'/babershop design/product_images/"+
            x[i].getElementsByTagName("IMAGE")[0].childNodes[0].nodeValue +"'>"  +
            "</img></td></tr>";
            }
            document.getElementById("demo").innerHTML = table;
        }
        </script>
        <br><br>
        <table class="table table-hover" id="demo"></table>
        
        
    </div>

    <!-- js file -->
    <!-- <script>src="/babershop design/js/display_all_product.js"</scrip> -->

</html>

