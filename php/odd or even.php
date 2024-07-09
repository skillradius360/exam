<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>odd even</title>
</head>
<body>
<div>
    <form action="odd or even.php" method="post">
        Enter a number:<input type="text" name="number">
        <br> <br>
        <input type="submit" value="SUBMIT">
    </form>
        <?php
        if($_POST){
            $number=$_POST['number'];
            {
        if($number%2==0){
            echo "It is a even number";
        }
        else{
            echo "It is a odd number";
        }
            }               }
        ?>

</div>
</body>
</html>