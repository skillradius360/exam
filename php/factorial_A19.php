<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <form action="factorial_A19.php" method="post">
        Enter a number:<input type="text" name="number">
        <br> <br>
        <input type="submit" value="SUBMIT">
        <br> <br>
    </form>
</head>
<body>
<?php
        if($_POST){
            $num=$_POST['number'];
            $factorial=1;
                for($i=1 ; $i<=$num ; $i++)
                {
                    $factorial=$factorial*$i;
                }
                echo $factorial."<br>";
            }
        ?>
</body>
</html>