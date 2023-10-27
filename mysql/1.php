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

$sql = "DELETE FROM myGuests WHERE id=3";

if (mysqli_query($conn, $sql)){
    echo "deleted";
} else {
    echo mysqli_error($conn);
}
?>