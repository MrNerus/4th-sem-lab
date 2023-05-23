<!-- trying git fork -->
<form method="POST">

    <input type="text" name="Name" id="name" placeholder="Enter your name">
    <input type="text" name="Email" id="email" placeholder="Enter your Email">
    <input type="password" name="Password" id="password" placeholder="Enter your Password">
    <button class="btn-next" type="submit" onclick="call()">Sign-in</button>
    
</form>
<script>
    function call(){

<?php


					
					$con = mysqli_connect('localhost','root','');
                    echo "hello";
                    mysqli_select_db($con, 'final');
					$name = $_POST['Name'];
					$email = $_POST['Email'] ;
					$password = $_POST['Password'];

                    $query = "INSERT INTO admindata (adName, adEmail, adPassword) VALUES ('$name', '$email', '$password')";

                    if (mysqli_query($con, $query )) {
                        echo "Done";
                    } else {
                        echo '<span class= "errorMessage">'.mysqli_error($con).'</span>';
                    };

                    // header('location:login.php');

					
		
					
//================================ PHP End =============================	
?>
    }

</script>



