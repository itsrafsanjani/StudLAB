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
                <a href="#"class="mybutton"> <?php echo $_SESSION['name']; ?> </a>
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
        </div>


        <div class="wrap-container">
            <a href="cse-01.php" class="col">

                <h1>1st Semester</h1>

                <p>All books of first semester were available here.</p>

            </a>


            <a href="#" class="col">

                <h1>2nd Semester</h1>

                <p>All books of second semester were available here.</p>

            </a>



            <a href="#" class="col">

                <h1>3rd Semester</h1>

                <p>All books of third semester were available here.</p>


            </a>


            <a href="#" class="col">

                <h1>4th Semester</h1>

                <p>All books of fourth semester were available here.</p>

            </a>


            <a href="#" class="col">

                <h1>5th Semester</h1>

                <p>All books of fifth semester were available here.</p>

            </a>

            <a href="#" class="col">

                <h1>6th Semester</h1>

                <p>All books of sixth semester were available here.</p>

            </a>

            <a href="#" class="col">

                <h1>7th Semester</h1>

                <p>All books of seventh semester were available here.</p>

            </a>

            <a href="semester-08/cse-semester-08.html" class="col">

                <h1>8th Semester</h1>

                <p>All books of eightth semester were available here.</p>

            </a>

            <a href="#" class="col">

                <h1>9th Semester</h1>

                <p>All books of nineth semester were available here.</p>

            </a>

            <a href="#" class="col">

                <h1>10th Semester</h1>

                <p>All books of tength semester were available here.</p>

            </a>

            <a href="#" class="col">

                <h1>11th Semester</h1>

                <p>All books of eleventh semester were available here.</p>

            </a>

            <a href="#" class="col">

                <h1>12th Semester</h1>

                <p>All books of twelveth semester were available here.</p>

            </a>
        </div>
    </div>



</body>

</html>