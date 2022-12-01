<?php

function emptyinputvalues($name, $email, $phnumber, $password){
    $result;

    if(empty($name) || empty($email) || empty($phnumber) || empty($password)){
        $result = true;
    }else {
        $result = false;
    }
    return $result;
}

function emailtaken($conn, $email){
    $sql = "SELECT * FROM credentials_customer WHERE cust_mail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("LogIn.html?error=stmfailed");
        exit();

    }
    mysqli_stmt_bind_param($stmt, "ss", $email);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultdata)){
        return $row;
    }else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);

}