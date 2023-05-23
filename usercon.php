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
    $subject = $_POST['subject'];
    $comment = $_POST['comment'];


    $query = "insert into contact (name, email, subject, comment)
    values ('$name', '$email', '$subject', '$comment')";

    mysqli_query($con, $query );

    header('location:contact.php');

?>