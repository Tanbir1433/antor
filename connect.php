<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schoolproject";

$con = mysqli_connect($servername,$username,$password,$dbname);

if(!$con){
    die("connectionnfailed:".mysqli_connect_error());
}

// echo"connected";

?>