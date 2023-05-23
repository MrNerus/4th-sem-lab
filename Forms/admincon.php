<?php

	$con = new mysqli('localhost','root','', 'final');
	$name = $_POST['Name'];
	$email = $_POST['Email'] ;
	$password = $_POST['Password'];

    $query = "INSERT INTO admindata (adName, adEmail, adPassword) VALUES ('$name', '$email', '$password')";

    if ($con->query($query )) {
        echo "Done";
    } else {
        echo '<span class= "errorMessage">'.$con->error_get_last().'</span>';
    };

                    // header('location:login.php');

					
		
					
//================================ PHP End =============================	
?>



