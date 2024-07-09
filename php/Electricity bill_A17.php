<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <form action="Electricity bill_A17.php" method="post">
        Enter a number:<input type="text" name="number">
        <br> <br>
        <input type="submit" value="SUBMIT">
        <br> <br>
    </form>
</head>

<body>
    <?php
        if($_POST){
            $bill=$_POST['number'];
            $first_bill=3.50;
            $second_bill=4.00;
            $third_bill=5.20;
            $four_bill=6.50;
            {
                if($bill <= 50)
                {
                    echo "The bill is " , $first_bill*$bill;
                }
                else if($bill > 50 && $bill <= 100)
                {
                    $tem=$bill-50;
                    $firts_bill=50*$first_bill;
                    $second_bill=$tem*$second_bill;
                    $add= $firts_bill+$second_bill;
                    echo "The bill is " , $add;
                }
                else if($bill > 100 && $bill <= 200)
                {
                    $tem=(50 * $first_bill ) + (100*$second_bill);
                    $rem= $bill-150;
                    $third_bill=$rem*$third_bill;
                    $add= $tem+$third_bill;
                    echo "The bill is " , $add;
                }
                else
                {
                    $tem=(50 * $first_bill ) + (100*$second_bill) + (100*$third_bill);
                    $rem= $bill-250;
                    $four_bill=$rem*$four_bill;
                    $add= $tem+$four_bill;
                    echo "The bill is " , $add;
                }
            }
        }
                ?>
</body>

</html>
