<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $_SESSION["favcolor"] = "green";
        $_SESSION["favanimal"] = "dinosaur";
        echo "Session variables are created";
    ?>
    <br>
    <br>
    <?php
        echo "Favorite color is " . $_SESSION["favcolor"];
        echo "<br>";
        echo "Favorite animal is " . $_SESSION["favanimal"];
    ?>

    <?php
        $_SESSION["favcolor"] = "yellow";
        echo "<br>";
        print_r($_SESSION);
    ?>

    <?php
    session_unset();
    session_destroy();
    ?>

    <?php
    echo "<br>";
    print_r($_SESSION);
    ?>
</body>
</html>