<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multiplication</title>
</head>

<body>
    <div>
        <form action="multiplexer.php" method="post">
            Enter a number:<input type="text" name="number">
            <br> <br>
            <input type="submit" value="SUBMIT">
        </form>
        <?php
        if($_POST){
            $number=$_POST['number'];
            {
                for($i = 1; $i <= 10; $i++)
                {
                   $ans=$number*$i;
                   echo "$number X $i  &nbsp &nbsp=  $ans <br>";
                }
            }               
        }
        ?>

    </div>
</body>

</html>