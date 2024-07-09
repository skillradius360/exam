<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>

<body>
    <form action="mathametical_calculator.php" method="post">
        Enter first number:<input type="text" name="number1">
        <br> <br>
        Enter second number:<input type="text" name="number2">
        <br> <br>
        Enter choice:<input type="text" name="choice">
        <br> <br>
        <input type="submit" value="SUBMIT">
    </form>
    <?php
        if($_POST){
            $number1=$_POST['number1'];
            $number2=$_POST['number2'];
            $choice=$_POST['choice'];
            {
                if($choice=="+")
                {
                    echo $number1 + $number2;
                }
                else if ($choice=="-")
                {
                    echo $number1 - $number2;
                }
                
                else if($choice=="*")
                {
                    echo $number1 * $number2;
                }
                else if($choice=="/")
                {
                    echo $number1 / $number2;
                }
                    else
                    {
                        echo "Wrong choice";
                    }
            }
        }
    ?>
</body>

</html>