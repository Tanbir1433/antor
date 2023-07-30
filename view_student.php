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

    $sql="SELECT * FROM `user` WHERE usertype='student'";

    $result=mysqli_query($con,$sql);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin </title>
    <?php

    include "admission_css.php"

    ?>

    <style>
    .table_th {

        padding: 20px;
        font-size: 20px;

    }

    .table_td {

        padding: 20px;
        font-size: 20px;
        background-color: skyblue;

    }
    </style>

</head>

<body>

    <?php

    include "admission_sidebar.php";
    
    ?>


    <div class="content">

        <center>
            <h1> Student Data</h1>
            <br>
            <table border="1px">
                <tr>
                    <th class="table_th">UserName</th>
                    <th class="table_th">Email</th>
                    <th class="table_th">Phone</th>
                    <th class="table_th">Password</th>
                    <th class="table_th">Delete</th>
                </tr>

                <?php

            while($info=$result->fetch_assoc())
            {
            ?>

                <tr>
                    <td class="table_td">

                        <?php echo"{$info['username']}"; ?>

                    </td>
                    <td class="table_td">

                        <?php echo"{$info['email']}"; ?>

                    </td>
                    <td class="table_td">

                        <?php echo"{$info['phone']}"; ?>

                    </td>
                    <td class="table_td">

                        <?php echo"{$info['password']}"; ?>

                    </td>

                    <td class="table_td">

                        <?php echo"<a herf='delete.php?student_id={$info['id']}'>Delete</a>"; ?>

                    </td>
                </tr>

                <?php
            }
            ?>
            </table>
        </center>
    </div>
</body>

</html>