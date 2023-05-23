<?php 

$email = $_POST['email'];
$password = $_POST['password'];

require_once("./initiate.php");

// $con = new mysqli('localhost','root','', 'final');

$validationQuery = "SELECT * FROM reg WHERE email = '$email' AND password = '$password'";
echo $email;
    if ($con->query($validationQuery) === true) {
        echo "pass";
        
        // header("Location: /Student-Admission/student.php", true, 301);
    }
    else {
        
            echo "Wrong Password";
    }

?>