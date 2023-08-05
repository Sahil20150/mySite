<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: gray;
            color: aliceblue;
            font-size: 35px;

        }

    </style>
</head>

<body>
    <div>

        <?php

        if (isset($_SESSION['U_name'])) {

            echo 'welcome' . '<br>' . $_SESSION['U_name'];

        ?>

        <div style="float: right; text-decoration:none; font-size:18px;  margin-right:30px;background-color:white;">
            <a style="text-decoration:none;color:red" href="logout.php " target="_blank">Logout</a>

    </div>
        <?php
        } 
        
        else {
            echo "<script>alert('login first')</script>";

            echo   header('Location: login.php');
        }



        ?>
    </div>
</body>

</html>