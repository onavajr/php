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
    <br>
    <br>
    <!--make time or mktime()-->
    <?php
    $d=mktime(12,21,59,06,27,1985);
    echo "Born in " . date("Y-m-d h:i:sa", $d);
    ?>
    <br>
    <!--create time using string, strotime()-->
    <?php
        $d=strtotime("10:30pm April 15 2014");
        echo "Created date is " . date("Y-m-d h:i:sa", $d);
    ?>
    <!--other ways to convert time string value--!>
    <br>
    <?php
    $d=strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";
    ?>
</body>
</html>