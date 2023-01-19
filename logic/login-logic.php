<?php

if(isset($_POST["submit"])){
    $authorID = $_SESSION['userid'];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'database.php';
    require_once 'functions.php';

    if (emptyInputLogin($username,$pwd) !== false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd, $authorID);
}
else{
    header("location: ../login.php");
    exit();
}