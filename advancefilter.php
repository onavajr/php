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
        $int = 122;
        $min = 1;
        $max = 200;

        if(filter_var($int, FILTER_VALIDATE_INT, array(
            "options" => array("min_range"=>$min, "max_range"=>
            $max)
        )) === false){
            echo("Variable value is not within the lega range");
        }else{
            echo("Variable value is within the legal range");
        }
    ?>
<br>
<br>
    <?php
        $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

        if(!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) ===
        false){
            echo("$ip is a valid IPv6 address");
        }else{
            echo("$ip is not a valid IPv6 address");
        }
    ?>
</body>
</html>