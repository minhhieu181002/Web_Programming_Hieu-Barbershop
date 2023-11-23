<?php
session_start();
$host = "localhost";
$username = "root";
$password ="";
$dbname = "onlinestore";
$conn = new mysqli($host,$username,$password,$dbname);
if(!$conn){
    die("FAILED QUERY");
}
// Retrieve user input
$email = $_POST["email"];
$password = $_POST["password"];

// Sanitize the email input (prevents SQL injection)
$email = $conn->real_escape_string($email);
// Retrieve the user's hashed password from the database
$query = "SELECT user_id, email, password FROM users WHERE email = '$email'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    
    // Verify the password
    if (password_verify($password, $user["password"])) {
        // Password matches
        $msg="<br>You have login successfully";
        echo $msg;
        $_SESSION['email'] = $email;
        $_SESSION['submit'] = true;
        //Set cookie
        if(isset($_POST['remember']) && ($_POST['remember'])){
            setcookie("email",$email,time()+(86400*7));
            setcookie("password",$password,time())+(86400*7);
            $msgCookie="<br>Establish cookie successfully";
            echo $msgCookie;
             // Redirect to a secure page
        }
        header("Location: home.php");
        
    } else {
        // Password doesn't match
        $msg= "<br>Incorrect username or password!";
        echo $msg;
    }
} else {
    echo "User not found!";
}
    if(isset($_COOKIE['email'])&&isset($_COOKIE['password'])){
        echo "User's cookie is:" .$_COOKIE['email']." - ".$_COOKIE['password'];
    }


$conn->close();
?>

