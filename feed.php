<!-- trying git fork -->
<?php

    $con = mysqli_connect('localhost','root','');

    // if($con){
    //     echo "Connection succesfull";
    // }
    // else{
    //     "no connection";
    // }

    mysqli_select_db($con, 'final');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];


    $query = "insert into contact (name, email, comment, feed)
    values ('$name', '$email', '$comment', 'Website') ";

    mysqli_query($con, $query );

    header('location:index.php');

?>