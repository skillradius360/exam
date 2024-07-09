<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <form action="fibonacei series_A20.php" method="post">
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
            $first=0;
            $second=1;
            $add=0;
            echo $first." ";
                for($i=1 ; $i<=$num ; $i++)
                {
                    $add= $first + $second;
                    $first=$second;
                    $second=$add;
                    echo $add." ";
                }
            }
            ?>
</body>
</html>