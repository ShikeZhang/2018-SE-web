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
    $dID = $_POST['dID_insert'];
    $name = $_POST['uname'];
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $sqlstr = "insert into Dossier(dossierId,aName,identityPicture) values('$dID', '$name', '$file')";

    if(mysqli_query($conn, $sqlstr)){
        echo '<script>alert("img inserted into Database!");location.href="insert.php"</script>';
    }
}

$conn -> close();