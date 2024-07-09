<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <form action="sum individual_A18.php" method="post">
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
            $sum=0;
            {
                for($i=0 ; $i<strlen($bill) ; $i++)
                {
                    $sum=$sum+$bill[$i];
                }
                echo "the sum is  ",$sum;
            }
        }
        ?>
</body>

</html>