<?php

include "connect.php";

if($_GET['student_id']){

    $id = $_GET['student_id'];

    $sql="DELETE FROM user WHERE id='$id'";

    $result = mysqli_query($con,$sql);

    if($result){

        header("location:view_student.php");

    }

}

?>