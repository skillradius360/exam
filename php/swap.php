<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>odd even</title>
</head>
<body>
<div>
    <form action="swap.php" method="post">
        Enter first number:<input type="text" name="number1">
        <br><br>
        Enter second number:<input type="text" name="number2">
        <br><br>
        <input type="submit" value="SUBMIT">
        <br><br>
    </form>
        <?php
        if($_POST){
            
            $number1=$_POST['number1'];
            $number2=$_POST['number2'];
            {
            echo "the firts number is $number1 <br> the second number is $number2 <br>";
            $number1=$number1+$number2;
            $number2=$number1-$number2;
            $number1=$number1-$number2;
            echo "the firts number is $number1 <br> the second number is $number2 ";
            }
                  }
        ?>

</div>
</body>
</html>