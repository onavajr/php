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
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["name"])){
                $nameErr = "Name is Required";
            } else {
                $name = test_input($_POST["name"]);

                if(!preg_match("/^[a-zA-Z-']", $name)){
                    $nameErr = "Only letters and white space allowed";
                }
            }

            if(empty($_POST["email"])){
                $emailErr = "Email is Required";
            } else {
                $email = test_input($_POST["email"]);

                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Invalid email format";
                }
            }

            if(empty($_POST["website"])){
                $website = "";
            } else {
                $website = test_input($_POST["website"]);
                if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www|.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",
                $website)){
                    $websiteErr = "Invalid URL";
                }
            }

            if(empty($_POST["comment"])){
                $commentErr = "";
            } else {
                $comment = test_input($_POST["comment"]);
            }

            if(empty($_POST["gender"])){
                $genderErr = "Gender is required";
            } else {
                $gender = test_input($_POST["gender"]);
            }

            function test_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            };
        }
    ?>
    <h1>PHP Form Validation Example</h1>
    Name:<input type="text" name="name">
    <br><br>
    Email:<input type="email" name="email">
    <br><br>
    Website:<input type="text" name="website">
    <br><br>
    Comment:<br><textarea type="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female 
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <br><br>
    <input type="submit">
</body>
</html>