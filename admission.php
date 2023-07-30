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

    $sql="SELECT * FROM `admission`";

    $result=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>

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
            <h1> Apply For Admission</h1>

            <br>

            <table border="2px">
                <tr>
                    <th style="padding:15px;font-sixe:15px;">Name</th>
                    <th style="padding:15px;font-sixe:15px;">Email</th>
                    <th style="padding:15px;font-sixe:15px;">Phone</th>
                    <th style="padding:15px;font-sixe:15px;">Message</th>
                </tr>


                <?php

            while($info=$result->fetch_assoc())
            {

            ?>

                <tr>
                    <td style="padding:15px;">

                        <?php echo "{$info['name']}"; ?>

                    </td>
                    <td style="padding:15px;">

                        <?php echo "{$info['email']}";?>

                    </td>
                    <td style="padding:15px;">

                        <?php echo "{$info['phone']}";?>

                    </td>
                    <td style="padding:15px;">

                        <?php echo "{$info['message']}";?>

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