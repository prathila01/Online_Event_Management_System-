<?php session_start();
require 'config.php'; ?>



<?php 
        if(isset($_SESSION['name'])){
            $name = $_SESSION['name'];

            header("Location: quotation.php");
                    
        }else {
            header("Location: login.php");
        }

        ?>