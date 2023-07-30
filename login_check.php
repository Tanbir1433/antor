<?php

error_reporting(0);
session_start();

include "connect.php";

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name = $_POST['username'];

        $pass = $_POST['password'];

        $sql=" SELECT * FROM user WHERE username='".$name."' AND password='".$pass."' ";

        $result=mysqli_query($con,$sql);

        $row=mysqli_fetch_array($result);

        if($row["usertype"]=="student")
        {
            $_SESSION['username']=$name;

            $_SESSION['usertype']="student";
            
            header("location:studenthome.php");

        }

        elseif($row["usertype"]=="admin")
        {
            $_SESSION['username']=$name;

            $_SESSION['usertype']="admin";

            header("location:adminhome.php");

        }

        else{

            
            $message= "username and password do not match";
            $_SESSION['LoginMessage']=$message;
            header("location:login.php");
        }

    }


?>