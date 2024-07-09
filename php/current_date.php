<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>current_date</title>
</head>

<body>
    <form action="current_date.php" method="getdate">
    </form>
    <?php
    $date_array=getdate();
    echo "<h1> Today's date:".$date_array['mday']."/".$date_array['mon']."/".$date_array['year']."</h1>";    
    ?>

</body>
</html>