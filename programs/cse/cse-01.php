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
    <title>StudLAB</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../css/flex.css">

</head>

<body>

    <div class="header-container">
        <header>
            <a href="../../index.php" class="logo"><b> StudLAB </b></a>
            <nav>
                <a href="http://bit.ly/itsrafsanjani" target="_blank" class="mybutton">ABOUT</a>
                <a href="http://bit.ly/itsrafsanjani" target="_blank" class="mybutton">CONTACT</a>
                <a href="#" class="mybutton"> <?php echo $_SESSION['name']; ?> </a>
                <a href="../../logout.php" class="mybutton-logout">Logout</a>
            </nav>

            <div class="mob-wrapper">

                <img src="../../images/icon-burger-menu.svg" alt="Mobile Menu Icon" class="burgermenu">


                <div class="mob-nav">
                    <a href="http://bit.ly/itsrafsanjani" target="_blank" class="navbutton">ABOUT</a>>
                    <a href="http://bit.ly/itsrafsanjani" target="_blank" class="navbutton">CONTACT</a>
                </div>

            </div>


        </header>

    </div>

    <div class="container">

        <div class="directory">
            <a href="../programs.php" class="my-left-padding">PROGRAMS &nbsp;&gt;&gt;</a>
            <!-- &nbsp;&nbsp; is for one space " " like this. -->
            <a href="cse.php">SEMESTER &nbsp;&gt;&gt;</a> <!-- &gt;&gt; is for greater than sign ">>" like this -->
            <a href="cse-01.php">COURSES</a>
        </div>

        <div class="wrap-container">
            <a href="#" class="col">

                <img src="../../images/computer-programming-by-subeen.png" alt="Computer Programming Book by Subeen">

                <p>Computer and Programming Concepts</p>

            </a>


            <a href="#" class="col">

                <img src="../../images/diffrential-and-itegral-calculas-2.jpg" alt="">

                <p>Differential and Integral Calculus</p>

            </a>



            <a href="#" class="col">

                <img src="../../images/english-grammer-by-betty-azar-2.jpg" alt="">

                <p>English Language-I</p>


            </a>


            <a href="#" class="col">

                <img src="../../images/phy-2.jfif" alt="">

                <p>Physics</p>

            </a>
        </div>
























    </div>


</body>

</html>