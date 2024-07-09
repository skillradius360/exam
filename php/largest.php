<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>odd even</title>
</head>
<body>
<div>
    <form action="largest.php" method="post">
        Enter first number:<input type="text" name="number1">
        <br><br>
        Enter second number:<input type="text" name="number2">
        <br><br>
        Enter third number:<input type="text" name="number3">
        <br> <br>
        <input type="submit" value="SUBMIT">
    </form>
        <?php
        if($_POST){
            $number1=$_POST['number1'];
            $number2=$_POST['number2'];
            $number3=$_POST['number3'];
            {
        if($number1>$number2)
        {
            if($number1>$number3)
                echo "maximum number $number1 ";
            else
                echo "maximum number $number3";
        }
        else{
            if($number3>$number2)
                echo "maximum number $number3 ";
            else
                echo "maximum number $number2";
        }
    }
}

        ?>

</div>
</body>
</html>