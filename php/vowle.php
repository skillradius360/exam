<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vowle.php</title>
</head>

<body>
    <form action="vowle.php" method="post">
        Enter first number:<input type="text" name="number">
        <br> <br>
        <input type="submit" value="SUBMIT">
    </form>
    <?php  
            if($_POST){
                $name=$_POST['number'];
                $name=strtolower($name);
                $count=0;
                {
                    for($i = 0; $i < strlen($name); $i++)
                    {
                        if($name{$i}=="a" || $name{$i}=="e" || $name{$i}=="i"|| $name{$i}=="o" || $name{$i}=="u")
                        {
                            $count++;
                        }
                    }
                echo $count;
                }
            }
           ?>
</body>

</html>