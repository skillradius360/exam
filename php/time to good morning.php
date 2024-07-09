<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1">
    <title>digital_clock</title>
    <style> 
        body{
            display:flex;
            justify-content:center;
            align-items:center;
        }
    </style>
</head>
<body>
<div>
        <?php
        date_default_timezone_set("Asia/Calcutta");
        echo date("h:i:s a<br>");

        $afternoon="<br>good afternoon !";
        $morning="good morning !";
        $evening="good evening !";
        $night="good night !";
        $current_time=date("h");
        $current_time1=date("a");
        if( $current_time < 12 && $current_time1=="am" && $current_time > 5  )

        {
            echo $morning;
        }
        elseif( $current_time >= 1 && $current_time1=="pm" && $current_time<4)
        {
            echo $afternoon;
        }
        elseif( $current_time >= 4 && $current_time1=="pm" && $current_time <= 7)
        {
            echo $evening;
        }
        elseif( $current_time > 7 && $current_time1=="pm" && $current_time < 5  && $current_time1=="am" )
        {
            echo $night;
        }
        ?> 
</body>
</html>