<?php

require_once 'Logout.php';

session_start();

if($_SESSION['id'] == NULL){
    echo "You are not logged in";
}

class Logout{
    public function logout(){
        session_destroy();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('location:signin.php');
    }
}




    
?>