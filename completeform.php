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
        $name = $email = $gender = $comment = $website = "";

       if($_SERVER['REQUEST_METHOD' == "POST"]){
        
       }
    ?>
    <h1>Form Validation</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        <br><br>
        Email: <input type="email" name="email">
        <br><br>
        Website: <input type="website" name="website">
        <br><br>
        Comment: <br> <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Gender: <input type="radio" name="gender" value="femail">Female
        <input type="radio" name="gender" value="male">Male
                
        <br><br>
        <input type="submit">
    </form>
</body>
</html>