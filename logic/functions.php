<?php

function emptyInput($uid,$email,$pwd,$pwdconfirm){
    $result;
    if(empty($uid) || empty($email) || empty($pwd) || empty($pwdconfirm)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($uid){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $uid)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdconfirm){
    $result;
    if($pwd !== $pwdconfirm){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidTaken($conn, $uid, $email){
    $sql = "SELECT * FROM users WHERE usersName = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=failed");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ss", $uid, $email);
    mysqli_stmt_execute($stmt);

    $dataResult = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($dataResult)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn,$uid,$email,$pwd){
    $sql = "INSERT INTO users (usersName,usersEmail,usersPassword) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=failed");
        exit();
    }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    
    mysqli_stmt_bind_param($stmt, "sss", $uid, $email,$hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();

}



function emptyInputLogin($username,$pwd){
    $result;
    if(empty($username) || empty($pwd)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn,$username,$pwd){
    $uidTaken = uidTaken($conn, $username, $username, );

    if ($uidTaken === false){
        header("location: ../login.php?error=failed");
        exit();
    }

    $pwdHashed = $uidTaken["usersPassword"];
    $checkPwd = password_verify($pwd, $pwdHashed);
    if($checkPwd === false){
        header("location: ../login.php?error=failed");
        exit();
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION["userid"] =  $uidTaken["usersID"];
        $_SESSION["useruid"] =  $uidTaken["usersName"];
        header("location: ../homepage.php");
        exit();
    }
}