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
$dID = $_GET['dID_delete'];

$sql = "delete FROM CA where ID = '$dID'" ;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>". "id: " . $row["phone_number"]. " - phone_number: " . $row["ID"]. "ID" . "<br>";
    }
} else {
    echo "DELETE SUCCEED";
}

$conn->close();


