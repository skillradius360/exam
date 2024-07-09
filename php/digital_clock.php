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
        ?> 
</body>
</html>