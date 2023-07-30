<?php

error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message']){

    $message=$_SESSION['message'];

    echo "<script type='text/javascript'> 
    
    alert('$message');
    
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Managment System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</head>

<body >
    <nav>
        <label class="logo">w-school</label>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>

    <div class="section1">
        <label class="img_text">WE TEACH STUDENT WITH CARE </label>
        <img class="main_img" src="image/school_management.jpg">
    </div>

    <div class="container">

        <div class="row">

            <div class="col-md-4">

                <img class="welcome_img" src="image/school2.jpg">

            </div>

            <div class="col-md-8">

                <h1>Wellcome to w-school</h1>
                <p> A school is an educational institution designed to provide learning spaces and learning environments
                    for the teaching of students under the direction of teachers. Most countries have systems of formal
                    education, which is sometimes compulsory. In these systems, students progress through a series of
                    schools.A school is an educational institution designed to provide learning spaces and learning
                    environments
                    for the teaching of students under the direction of teachers. Most countries have systems of formal
                    education, which is sometimes compulsory. In these systems, students progress through a series of
                    schools teaching of students under the direction of teachers. Most countries have systems of formal
                    education, which is sometimes compulsory.</p>

            </div>

        </div>

    </div>

    <center>
        <h1>OUR TEACHERS</h1>
    </center>

    <div class="container">

        <div class="row">

            <div class="col-md-4">

                <img class="teacher" src="image/teacher1.jpg">
                <p>Thorough knowledge of teaching best practices and legal educational guidelines partnered with a
                    willingness to follow the school's policies and procedures.</p>

            </div>

            <div class="col-md-4">

                <img class="teacher" src="image/teacher2.jpg">

                <p>Thorough knowledge of teaching best practices and legal educational guidelines partnered with a
                    willingness to follow the school's policies and procedures.</p>


            </div>

            <div class="col-md-4">

                <img class="teacher" src="image/teacher3.jpg">
                <p>Thorough knowledge of teaching best practices and legal educational guidelines partnered with a
                    willingness to follow the school's policies and procedures.</p>


            </div>

        </div>

    </div>

    <center>
        <h1>OUR COURSE</h1>
    </center>

    <div class="container">

        <div class="row">

            <div class="col-md-4">

                <img class="teacher" src="image/web.jpg">

                <h1>Web Developer</h1>

            </div>

            <div class="col-md-4">

                <img class="teacher" src="image/graphic.jpg">


                <h1>Graphic Designer</h1>


            </div>

            <div class="col-md-4">

                <img class="teacher" src="image/marketing.png">

                <h1>Marketing</h1>


            </div>

        </div>

    </div>

    <center>
        <h1 class="adm">Admission Form</h1>
    </center>

    <div align="center" class="admission_form">

        <form action="data_check.php" method="POST">

            <div class="adm_int">
                <label class="label_text">Name</label>
                <input class="input_deg" type="text" name="name">
            </div>

            <div class="adm_int">
                <label class="label_text">Email</label>
                <input class="input_deg" type="text" name="email">
            </div>

            <div class="adm_int">
                <label class="label_text">Phone</label>
                <input class="input_deg" type="text" name="phone">
            </div>

            <div class="adm_int">
                <label class="label_text">Message</label>
                <textarea class="input_txt" name="message"></textarea>
            </div>

            <div class="adm_int">

                <input class="btn btn-primary" id="submit" type="Submit" value="apply" name="apply">
            </div>

        </form>
    </div>

    <footer>
        <h3 class="footer_text">All @copyright reserved by web tech knowledge</h3>
    </footer>
</body>

</html>