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
//$myfile = fopen("text.txt", "r") or die("Unable to open file!");
//echo fgets($myfile);
//fclose($myfile);
?>

<?php
$myfile = fopen("text.txt", "r") or die("Unable to open");
while(!feof($myfile)){
    echo fgets($myfile) . "<br>";
}

fclose($myfile);
?>
</body>
</html>