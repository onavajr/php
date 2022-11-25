<?php
    $servername = "localhost";
    $username = "username";
    $password = "password";

    $conn = mysqli_connect($servername, $username, $password);

    if(!$conn){
        die("Connection failed" . mysqli_connect_error());
    }

    echo "Connected successfully";

    $sql = "CREATE DATABASE myDB";
    if(mysqli_query($conn, $sql)){
        echo "Database created successfully";
    } else {
        echo "Error creating databse" . mysqli_error($conn);
    }

    $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRNET_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )"

    if (mysqli_query($conn, $sql)){
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " .mysqli_error($conn);
    }
    mysqli_close($conn);
?>