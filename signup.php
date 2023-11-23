<script src="/babershop design/js/validation.js"></script>
<?php
// Include the header.php file
include 'header.php';
$host = "localhost";
$username = "root";
$password ="";
$dbname = "onlinestore";
$flag_success = FALSE;
$conn = new mysqli($host,$username,$password,$dbname);
if(!$conn){
    die("FAILED QUERY");
}
if(isset($_POST['submit'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone_number = $_POST['phone_number'];

    $hashedPassword = password_hash($password,PASSWORD_DEFAULT);
    if(!empty($firstName)&&!empty($lastName)&&!empty($email)&&!empty($password)&&!empty($phone_number)){
        $sql = "insert into `users`(firstName,lastName,email,Password,Phone) VALUES('$firstName','$lastName','$email','$hashedPassword','$phone_number')";
        if($conn->query($sql)===TRUE){
            echo "You have registered successfully";
            $flag_success = TRUE;
        }else{
            echo "Error {$sql}".$conn->error;
            $flag_success = FALSE;
        }
    }
    else{
        echo "You need to fill enough information";
    }
}

?>


<div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <div class="row col-md-6 signup-form">
        <div class="panel panel-primary">
            <div class="panel-heading text-center">
                <h1>Sign-up </h1>
            </div>
            <div class=" panel-body">
                <form action="signup.php" method="post">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName"/>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="signUpEmail" name="email"/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="signUpPassword" name="password"/>
                    </div>
                    <div class="form-group">
                        <label for="password">Confirm Password</label>
                        <input type="password" class="form-control" id="signUpConfirmPassword" name="password"/>
                    </div>
                    <div class="form-group">
                        <label for="phone-number">Phone number</label>
                        <input type="text" class="form-control" id="phone-number" name="phone_number"/>
                    </div>   
                    <div >
                    <input type="submit" onclick="return validateSignupForm();" class="btn btn-brand submit-signup" value="Submit" name="submit">
                    <?php
                        if($flag_success===TRUE){
                    ?>
                        <a href="login.php" class="btn btn-brand submit-signup">Login</a>
                    <?php
                    }
                    ?>
                    </div>                
                </form>
            </div>
            <div class="panel-footer text-end">
                <small>&copy; BlackMan HH</small>
            </div>
        </div>
    </div>
</div>