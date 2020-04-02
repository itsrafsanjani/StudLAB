<?php

session_start();

$message = '';

if ($_SESSION['id'] == NULL) {
    header('location:signin.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StudLAB - Home</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/site.css">
</head>

<body>

    <div class="header-container">
        <header>
            <a href="index.php" class="logo"><b> StudLAB </b></a>

            <nav>
                <a href="http://bit.ly/itsrafsanjani" target="_blank" class="mybutton">ABOUT</a>
                <a href="http://bit.ly/itsrafsanjani" target="_blank" class="mybutton">CONTACT</a>
                <a href="#" class="mybutton"> <?php echo $_SESSION['name']; ?> </a>
                <a href="logout.php" class="mybutton-logout">Logout</a>
            </nav>

            <div class="mob-wrapper">

                <img src="images/icon-burger-menu.svg" alt="Mobile Menu Icon" class="burgermenu">


                <div class="mob-nav">
                    <a href="http://bit.ly/itsrafsanjani" target="_blank" class="navbutton">ABOUT</a>>
                    <a href="http://bit.ly/itsrafsanjani" target="_blank" class="navbutton">CONTACT</a>
                </div>

            </div>


        </header>
    </div>


    <div class="container-menu">

        <div class="intro">
            <h2 class="hey">Hey <?php echo $_SESSION['name']; ?>!</h2>
            <h1>Welcome to StudLAB</h1>
            <p>Where you can find every necessary book.</p>
            <a href="programs/programs.php" class="lets-go-btn"> Let's Go! </a>
        </div>

    </div>

</body>

</html>