<?php

session_start();

include "connect.php";

    if(isset($_POST['apply'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $sql="INSERT INTO `admission`(`id`, `name`, `email`, `phone`, `message`)
            VALUES (NULL,'$name','$email','$phone','$message')";

        $result=mysqli_query($con,$sql);
        
        if($result){

            $_SESSION['message']="Apply Sucessfully";

            header("location:index.php");
            // echo("Apply Sucessfully");
        }
        else{

            echo("Apply Failed");
        }


    }

?>