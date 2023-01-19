<?php

if (isset($_POST["submit"])){
    $uid = $_POST['uid'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $pwdconfirm = $_POST['pwdconfirm'];

    require_once 'database.php';
    require_once 'functions.php';

    if (emptyInput($uid,$email,$pwd,$pwdconfirm) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidUid($uid) !== false){
        header("location: ../signup.php?error=invaliduid");
        exit();
    }

    if (invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if (pwdMatch($pwd, $pwdconfirm) !== false){
        header("location: ../signup.php?error=pwddontmatch");
        exit();
    }

    if (uidTaken($conn, $uid, $email) !== false){
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn,$uid,$email,$pwd);
}
else {
    header("location: ../signup.php");
}