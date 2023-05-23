<?php 

$email = $_POST['email'];
$password = $_POST['password'];

require_once("./initiate.php");
echo $email;
    if ($con->query("SELECT * FROM reg WHERE email = '$email' AND password = '$password'") === true) {
    // if (true) {  // This is used for testing by mrnerus. He does not have Mastic's Database
        header("Location: ./Student-Admission/student.php", true, 301);
    } else if ($con->query("SELECT * FROM admindata WHERE adEmail = '$email'AND adPassword[ = '$password')") === true) {
        header("Location: ./Student-Admission/operator.php", true, 301);
    }
    else {    
        echo "Wrong Password";
    }
?>