<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="5inb1";
$conn = mysqli_connect($servername, $username, $password,$database);

$sql = "SELECT id, firstname, lastname FROM myGuests";
$result = mysqli_query($conn, $sql);




?>