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
        trait message1 {
            public function msg1(){
                echo "OOP is Fun!";
            }
        }

        class Welcome {
            use message1;
        }

        $obj = new Welcome();
        $obj->msg1();
    ?>
</body>
</html>