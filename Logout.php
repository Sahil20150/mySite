<?php
  session_start();

  if(isset($_POST["submit"])){

    session_unset();
    session_destroy();
    echo "<script>alert('logout success')</script>";
    echo   header('Location: login.php');
  
  }
  
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        form input{
            font-size: 35px;
          
            text-align: center;
            height: 50px;
            width: 115px;
            background-color: orange;
            color: green;
        }
    </style>
</head>
<body>
 <form action="" method="post">
    <input type="submit" name="submit" value="Logout">
 </form>
</body>
</html>