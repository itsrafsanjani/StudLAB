<?php

session_start();

$message = '';

if($_SESSION['name'] == NULL){
    header('location:signin.php');
}
else {
    if (isset($_GET['logoutbtn'])) {
        session_destroy();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('location:signin.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - StudLAB</title>
    <style>
        a {
            text-decoration: none;
            background-color: #6dabe4;
            color: white;
            border-bottom: none;
            width: 150px;
            padding: 15px 39px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <h1>Wellcome<?php echo $_SESSION['name'];?> </h1>

    <a href="?logoutbtn=true">Logout</a>
</body>

</html>