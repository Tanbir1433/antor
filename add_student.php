<?php

session_start();

    if(!isset($_SESSION['username']))
    {

        header("location:login.php");

    }

    elseif($_SESSION['usertype']=='student')
    {
        header("location:login.php");

    }

include "connect.php";
if(isset($_POST['add_student'])){

    $username = $_POST['name'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];
    $Password = $_POST['password'];
    $usertype = "student";


    $check="SELECT * FROM `user` WHERE username='$username' ";

    $check_user=mysqli_query($con,$check);

    $row_count=mysqli_num_rows($check_user);

    if($row_count==1){

        echo "<script type='text/javascript'>
        
            alert('Username Alerady Exist');

            </script>";

        // echo"Username Alerady Exist";


    }

    else{
        
        $sql="INSERT INTO `user`(`id`, `username`, `phone`, `email`, `usertype`, `password`) 
        VALUES ( NULL,'$username','$Phone','$Email','$usertype','$Password')";

        $result=mysqli_query($con,$sql);

        if($result){

            echo "<script type='text/javascript'>
        
            alert('Data Uploaded sucessfully');

            </script>";

        // echo("data uploded");
        }

        else{
            echo("failed");
        }

    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student </title>

    <style>
    label {

        display: inline-block;
        text-align: right;
        width: 100px;
        padding-top: 10px;
        padding-bottom: 10px;


    }

    .div_deg {

        background-color: skyblue;
        width: 420px;
        padding-top: 30px;
        padding-bottom: 30px;

    }
    </style>

    <?php

    include "admission_css.php"

    ?>

</head>

<body>

    <?php

    include "admission_sidebar.php";
    
    ?>


    <div class="content">
        <center>
            <h1> Add Student</h1>

            <div class="div_deg">

                <form action="" method="POST">
                    <div>

                        <label>UserName</label>
                        <input type="text" name="name">

                    </div>

                    <div>

                        <label>Email</label>
                        <input type="email" name="email">

                    </div>

                    <div>

                        <label>Phone</label>
                        <input type="number" name="phone">

                    </div>

                    <div>

                        <label>Password</label>
                        <input type="text" name="password">

                    </div>

                    <div>

                        <input type="submit" class="btn btn-primary" name="add_student" value="Add Student">

                    </div>


                </form>
            </div>
        </center>
    </div>
</body>

</html>