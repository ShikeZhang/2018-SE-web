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

$sql = "delete from Dossier where dossierId = '$dID'" ;
$result = $conn->query($sql);

$sql2 = "delete from FaceRecord where assignedDossierId = '$dID'";
$result2 = $conn->query($sql2);



$sqlTest2 = "select * from FaceRecord where dID = '$dID'";


$sqlTest1 = "select * from Dossier where dID = '$dID'" ;
$resultTest1 = $conn->query($sqlTest1);
$resultTest2 = $conn->query($sqlTest2);


if ($resultTest1->num_rows > 0 or $resultTest2->num_rows >0) {
    echo "DELETE FAILED";
    echo '<script>location.href ="delete.php"</script>' ;
} else {
    echo "DELETE SUCCEED";
    echo '<script>location.href ="delete.php"</script>' ;
}

$conn->close();


