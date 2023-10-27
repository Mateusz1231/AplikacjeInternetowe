<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="5inb1";
$conn = mysqli_connect($servername, $username, $password,$database);

$sql = "SELECT id, firstname, lastname FROM myGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "id: " . $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
    }
} else {
    echo ("0 results");
}


?>