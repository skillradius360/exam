<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>palindrome</title>
</head>

<body>
    <form action="palindrome.php" method="post">
        <input type="text" name="number">
        <input type="submit" value="SUBMIT">
    </form>
    <?php
        if($_POST){
            $number=$_POST['number'];
            $number1=$number;
            $reverse_number=0;
            $reminder=0;
            {
                while(floor($number)){
                    $reminder=$number%10;  
                    $reverse_number=$reverse_number*10+$reminder;
                    $number=$number/10;
                }
                if($number1==$reverse_number)
                {
                    echo "it is palindrome";
                }
                    else
                    {
                        echo "it is not palindrome";
                    }
            }
        }
    ?>
</body>
</html>