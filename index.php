<?php
$servername = "localhost";
$username = "****";
$password = "****";
$dbname = "****";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully<br><br>";

$sql = "SELECT * FROM Fighters";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]."<br>";
        echo "Class: " . $row["class"]. " | Strength:".$row["strength"].", Wisdom:".$row["wisdom"]."<br>";
        echo "Location: ".$row["location"]."<br><br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>