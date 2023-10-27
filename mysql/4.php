<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="5inb1";
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT id, firstname, lastname FROM myGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
    echo "<table id = 'a1'>";
    while($row = mysqli_fetch_row($result)){
        echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
    }
    echo "</table>";
}


?>