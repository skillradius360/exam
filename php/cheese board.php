<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
</head>
<body>
    <table width="400px" border="1">
        <?php 
        echo"Chess Board in PHP using for loop";
        $value=0;

        for($col=0; $col<8;$col++) {
            echo "<tr>";
            $value=$col;
        
        for  ($row = 0 ; $row < 8; $row++ )  {
            if($value%2==0){
                echo"<td height=40px width=20px bgcolor='white'></td>".
                $value++;
            }
            else{
                echo "<td height=40px width=20px bgcolor='black'></td>".
                $value++;
            }
        }
        echo "</tr>";

        }
    ?>
</body>
</html>