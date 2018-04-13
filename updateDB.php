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


if(isset($_POST["update"]))
{
    $dID = $_POST['dID_update'];
    $name = $_POST['name_update'];
    $file = addslashes(file_get_contents($_FILES["image_update"]["tmp_name"]));


    $sqlstr = "update Dossier set aName = '$name', identityPicture = '$file' where dossierId ='$dID'";

//    $sqlstr = "update Dossier set aName = '$name' where dossierId ='$dID'";

//        $sqlstr2 = "update Dossier set identityPicture = '$file' where dossierId='$dID'";

    if(mysqli_query($conn, $sqlstr)){
        echo '<script>alert("Record changed!");location.href="update.php"</script>';
    }
}

$conn -> close();