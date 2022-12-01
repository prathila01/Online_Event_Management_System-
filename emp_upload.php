<?php

// ref - https://github.com/codingWithElias/image-upload-php-and-mysql

if(isset($_POST["submit"]) && isset($_FILES["emp_img"])){
    include "config.php";

	echo "<pre>";
	print_r($_FILES['emp_img']);
	echo "</pre>";

	$img_name = $_FILES['emp_img']['name'];
	$img_size = $_FILES['emp_img']['size'];
	$tmp_name = $_FILES['emp_img']['tmp_name'];
	$error = $_FILES['emp_img']['error'];

	if($error === 0){
        $img_ext = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ext_s = strtolower($img_ext);

        $allowed_ext = array("jpg", "jpeg", "png"); 

        if (in_array($img_ext_s, $allowed_ext)) {
            $new_img_name = uniqid("IMG-", true).'.'.$img_ext_s;
            $img_upload_path = 'emp_uploads/'.$new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);

            // Insert into Database
            $sql = "INSERT INTO images(image_url) 
                    VALUES('$new_img_name')";
            mysqli_query($conn, $sql);
            $err_m="Upload successful";
            header("Location: emp.php?error=$err_m");
            
        }else {
            $err_m = "File type not aloowed to upload";
            header("Location: emp.php?error=$err_m");
        }
    }
    else {
        $err_m = "Error occured.";
        header("Location: emp.php?error=$err_m");
    }
}
else{
    header("Location: emp.php");
}

?>