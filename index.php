<?php
    // Check the 'page' parameter in the URL and load the corresponding content
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    switch ($page) {
        case 'home':
            include('home.php');
            break;
        case 'products':
            include('products.php');
            break;
        case 'login':
            include('login.php');
            break;
        case 'insertNewProduct':
          include('insertNewProduct.php');
          break;
        case 'signup':
          include('signup.php');
          break;
          case 'users':
            include('users.php');
            break;
        default:
            include('home.php'); // Default to home if 'page' parameter is not recognized
            break;
    }
?>