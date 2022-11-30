<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Your input</h1>
<br><br>
<h1>
<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
    echo $_POST['name'];
    echo "<br>";
    echo $_POST['email'];
    echo "<br>";
    echo $_POST['gender'];
    echo "<br>";
    echo $_POST['comment'];
    echo "<br>";
    echo $_POST['website'];
?>
</body>
</html>