<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>armstrong</title>
</head>

<body>
    <form action="armstrong.php" method="post">
        Enter first number:<input type="text" name="number">
        <br> <br>
        <input type="submit" value="SUBMIT">
    </form>
    <?php  
            if($_POST){
                $num=$_POST['number'];
                $total=0;  
                $x=$num; 
                while($x!=0)  
                {  
                $rem=$x%10;  
                $total=$total+$rem*$rem*$rem;  
                $x=$x/10;  
                }  
                if($num==$total)  
                {  
                    echo "Yes it is an Armstrong number";  
                }  
                else  
                {  
                    echo "it is not an armstrong number";  
                }  
            }
                ?>
</body>

</html>