<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Hello World!</title>
    <link href="index.css" rel="stylesheet" />
</head>
<body background="2.jpg">
<ul>
    <li><a href="login.php">返回登录</a></li>
    <li><a href="register.php">返回注册</a></li>
</ul>
<script type="text/javascript" src="index.js"></script>


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
    echo "0 results";
}
$conn->close();
?>




</body>

</html>
