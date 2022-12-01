<?php

include "config.php";


if(isset($_POST['username']) && isset($_POST['oldpassword'])){

    $username = $_POST['username'];    
    $password =md5($_POST['oldpassword']);
    $npassword =md5($_POST['newrepassword']);

    if(empty($username)){
        header("Location: login.php?error=Username is required");
        exit();
    }elseif (empty($password)) {
        header("Location: login.php?error=Password is required");
        exit();
    }

    $if_employee = false;

        $splitted_username = str_split($username,1);

        //if user has E as first letter
        if($splitted_username[0] == "E"){
            
            //if username length has 6 letters
            if(count($splitted_username) == 6){
                //checking if the rest of strings is a number
                $num = str_replace("E","",$username);
                if(is_numeric($num)){
                    $if_employee = true;
                }
            }

        }

        if(!$if_employee){

            $sql = "SELECT * FROM credentials_customer WHERE cust_mail = '$username' AND cust_pass = '$password'";
           

            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();          
            $id = $row['cust_mail'];
            $pass = $row['cust_pass'];

           
            if($id == $username && $pass == $password){
                
                $sqlc = "UPDATE credentials_customer SET cust_pass='$npassword' WHERE cust_mail = '$username'";
                $conn->query($sqlc);
                header("Location: login.php?error=Reset");
                echo "reset";  
                exit();      
                              
            }else {
                
                header("Location: login.php?error=Wrong");
                
    
            }

        }else {

            $sql = "SELECT * FROM credentials_employee WHERE emp_ID  = '$username' AND emp_pass = '$password'";
            $result = $conn->query($sql);
            $row = $result -> fetch_assoc();
            $id = $row['emp_ID'];
            $pass = $row['emp_pass'];

            if($id == $username && $pass == $password){
                $sqlc = "UPDATE credentials_employee SET emp_pass='$npassword' WHERE emp_ID = '$username'";
                $conn->query($sqlc);
                header("Location: login.php?error=Reset");
                echo "reset";              
                exit();
                
            }else {

                header("Location: login.php?error=Password is required");
                exit();
               
            }

        }

    }