<?php
$servername = "127.0.0.1";
$username = "root";
$password = "123456";
$dbname = "m34DB";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connect success";



if(isset($_POST["insert"]))
{
    $rID = $_POST['rID'];
    $time = $_POST['time'];
    $camera = $_POST['camera'];
    $dIDd = $_POST['dIDd'];
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $sqlstr = "insert into FaceRecord(recordId, aTimestamp, cameraId, assignedDossierId,picture) values('$rID', '$time', '$camera', '$dIDd' ,'$file')";

    if(mysqli_query($conn, $sqlstr)){
        echo '<script>alert("img inserted into Database!");location.href="insert_record.php"</script>';
    }
}

$conn -> close();