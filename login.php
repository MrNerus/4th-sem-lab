<!-- trying git fork -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport", initial-scale="1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="login-box">
            <form action="#">
                <div class="page-box">
                    <div class="login-title">
                        <h2 class="loginTitle-text">Login</h2>
                        <p class="user-email">Please login to use The platform</p>
                    </div>
                    <div class="page email-page">
                        <div class="input-box">
                            <input type="text" class="email" name="email"
                            autofocus required>
                            <label>Enter your Email</label>
                        </div>
                        <div class="forget">
                            <a href="#">Forgot Email?</a>
                        </div>
                    
                    <div class="guest-mode">
                        <p>Not your computer? Use guest mode to login privetly.</p>
                        <a href="#">Learn more</a>
                    </div>
                    <div class="btn-box">
                        <a href="reg.php">Create Account</a>
                        <button class="btn-next">next</button>
                     </div>
                    </div>

                    <div class="page password-page">
                        <div class="input-box">
                            <input type="password" class="password"
                             required>
                            <label>Enter your password</label>
                        </div>
                        <div class="forget show">
                            <a href="#">Forgot Password?</a>
                            <label for=""><input type="checkbox" class="checkbox-pass">show password</label>
                        </div>
                    <div class="btn-box">
                        <button class="btn-back">back</button>
                        <button class="btn-next" type="submit">Login</button>
                     </div>
                    </div>
                 </div>                  
            </form>
        </div>
    </div>
    <!-- <script src="script.js"></script> -->
    <script src="login.js"></script>
</body>
</html>