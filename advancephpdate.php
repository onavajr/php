<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Today is ". date("Y/m/d") . "<br>";
        echo "Today is ". date("l") . "<br>";
        
    ?>
    &copy; 2010-<?php echo date("Y");?>
    <br>
    <br>
    <?php
        date_default_timezone_set("America/New_York");
        echo "The time is " . date("h:i:sa");
    ?>
</body>
</html>