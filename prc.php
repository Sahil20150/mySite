<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prc.php" method="post">
        <input type="checkbox" name="food[]" value="pizza">pizza<br>
        <input type="checkbox" name="food[]" value="burger">burger<br>
        <input type="checkbox" name="food[]" value="hamburg">hamburg<br>
        <input type="checkbox" name="food[]" value="taco">taco<br>
        <input type="submit" name="submit">

    </form>
    <?php  
       if(isset($_POST["submit"])){
        
       $food = $_POST["food"];
      foreach($food  as $foods){
        echo $foods."<br>";
      }
    }
    ?>
    
</body>
</html>