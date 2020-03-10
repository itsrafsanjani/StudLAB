<?php

$wpass = '';

class SignInClass
{
    public function adminSignInCheck(){
        extract($_POST);
        $link = mysqli_connect('localhost', 'root', '', 'test');
        $sql = "SELECT * FROM user WHERE email = '$email' && pass = '$pass'";
        if($result = mysqli_query($link,$sql)){
            $user = mysqli_fetch_assoc($result);
            if($user){
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                header('location:home.php');
                // echo "Login Successfull";
            }
            else {
                // header('location:signin.php');
                return "Wrong Username or Password";
            }
        }
        else {
            die('Query Error'.mysqli_error($link));
        }

    }

}

// if (isset($_SESSION['id']==NULL)) {
//     header('location:home.php');
// }

$message = '';

if (isset($_POST['signin'])) {
    $signin = new SignInClass();
    $message = $signin->adminSignInCheck();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in Page - StudLAB</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">


        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>

                        <!-- Form start here! -->
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term">
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <h3> <?php echo $message; ?>  </h3>

                                <input type="submit" name="signin" id="signin" class="form-submit-1" value="Sign in">
                                <div style="text-decoration: none">
                                    <a href="signup.php"><input type="button" name="signup" id="signup" class="form-submit-2" value="Sign Up!"></a>
                                </div>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>