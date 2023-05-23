<!-- trying git fork -->
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


    $con = mysqli_connect('localhost','root','');

    // if($con){
    //     echo "Connection succesfull";
    // }
    // else{
    //     "no connection";
    // }

    // echo $_POST;
    // foreach ($variable as $key => $value) {
    //     # code...
    // }

    mysqli_select_db($con, 'final');

    $validationQuery = "SELECT * FROM reg WHERE email = $email";
    // mysqli_query($con, $validationQuery );
    $something = mysqli_execute_query($con,$validationQuery );
    echo $something;

    

    // $query = "insert into reg (name, email, password)
    // values ('$name', '$email', '$password')";

    // mysqli_query($con, $query );

    // header('location:contact.php');

?>

