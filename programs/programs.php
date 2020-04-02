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
        <link rel="stylesheet" href="../css/flex.css">

    </head>
    <body>

        <div class="header-container">
            <header>
                <a href="../index.php" class="logo"><b> StudLAB </b></a>
                <nav>
                    <a href="http://bit.ly/itsrafsanjani" target="_blank" class="mybutton">ABOUT</a>
                    <a href="http://bit.ly/itsrafsanjani" target="_blank" class="mybutton">CONTACT</a>
                    <a href="#"class="mybutton"> <?php echo $_SESSION['name']; ?> </a>
                    <a href="../logout.php" class="mybutton-logout">Logout</a>
                </nav>

                <div class="mob-wrapper">

                    <img src="../images/icon-burger-menu.svg" alt="Mobile Menu Icon"  class="burgermenu" >


                    <div class="mob-nav">
                        <a href="http://bit.ly/itsrafsanjani" target="_blank" class="navbutton">ABOUT</a>>
                        <a href="http://bit.ly/itsrafsanjani" target="_blank" class="navbutton">CONTACT</a>
                    </div>

                </div>


            </header>
        </div>




        <div class="container">

            <div class="directory">
                <a href="programs.php" class="my-left-padding">PROGRAMS &nbsp;&gt;&gt;</a>
              </div>
        
          
            <div class="wrap-container">
              <a href="cse/cse.php" class="col">
    
                <h1>CSE</h1>
    
                <p>Computer Science and Engineering.</p>
    
              </a>
  
  
              <a href="#" class="col">
    
                <h1>EEE</h1>
    
                <p>Electrical and Electronics Engineering.</p>
    
              </a>
  
  
  
              <a href="#" class="col">
    
                <h1>BBA</h1>
    
                <p>Bachelor of Business Administration.</p>
    
  
            </a>
  
            
              <a href="#" class="col">
    
                <h1>ENG</h1>
    
                <p>Bachelor of Arts in English  .</p>
    
              </a>
  
  
              <a href="#" class="col">
    
                <h1>TEX</h1>
    
                <p>Textile Engineering.</p>
    
            </a>
  
              <a href="#" class="col">
    
                <h1>ECO</h1>
  
                <p>B.Sc. in Economics.</p>
    
            </a>


            
        </div>


</body>
</html>