<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected succesfully <br>";
$database="5inb1";
if (mysqli_select_db($conn, $database)){
    echo "Database $database selected <br>";
} else {
    echo "Error select database: ".mysqli_error($conn);
}

// $sql = "CREATE TABLE myGuests (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";

//     if(mysqli_query($conn, $sql)){
//         echo "table myGuests created succesfully";
//     } else {
//         echo "Error creating table: ".mysqli_error($conn);
//     }
// $sql = "INSERT INTO myGuests (firstname, lastname , email) VALUES ('ad321am','ad12a','jad123am@example.com');
// INSERT INTO myGuests (firstname, lastname , email) VALUES ('adam','ada','jadam@example.com');
// INSERT INTO myGuests (firstname, lastname , email) VALUES ('marek','mare','jmarek@example.com');";
// if(mysqli_multi_query($conn, $sql)){
//              echo "succesfully";
//          } else {
//              echo "Error: ".mysqli_error($conn);
//          }
?>