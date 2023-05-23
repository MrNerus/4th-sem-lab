<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

require_once("../initiate.php");


    // $con = new mysqli('localhost','root','', 'final');

    // // This is used to check connection
    // if($con){
    //     echo "Connection succesfull";
    // }
    // else{
    //     "no connection";
    // }


    $validationQuery = "SELECT * FROM reg WHERE email = '$email'";
    $con->query($validationQuery);
    if ($con->query($validationQuery) === true) {
        echo "User Already Exist";
    }
    else {
        $registrationQuery = "INSERT INTO reg (name, email, password) VALUES ('$name', '$email', '$password')";
        if ($con->query($registrationQuery)) {
            echo "Registration Sucessfull.";

        } else {
            echo "Something Went Wrong.";
        }

    }

    

    // $query = "insert into reg (name, email, password)
    // values ('$name', '$email', '$password')";

    // mysqli_query($con, $query );

    // header('location:contact.php');

?>

