<?php
$servername = "127.0.0.1";
$username = "root";
$password = "123456";
$dbname = "m34DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT * FROM CA";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>". "id: " . $row["phoneNum"]. " - phone_number: " . $row["ID"]. "ID" . "<br>";
    }
} else {
    echo "No photos";
}
$conn->close();
