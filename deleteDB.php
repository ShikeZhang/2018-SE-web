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

$sql = "delete from photo where dID = '$dID'" ;

$result = $conn->query($sql);

$sql2 = "select * from photo where dID = '$dID'" ;

$result2 = $conn->query($sql2);


if ($result2->num_rows > 0) {
    echo "DELETE FAILED";
} else {
    echo "DELETE SUCCEED";
}

$conn->close();


