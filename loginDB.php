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


if(isset($_POST["user"]))
{
    $username = $_POST['username'];
    $pw = $_POST['password'];

    $sqlstr = "select * from users where userID='$username' and password='$pw'";

    $result = $conn->query($sqlstr);

    if ($result->num_rows > 0) {
        echo '<script>alert("Login Succeed!");location.href="admin.php"</script>';
    }
    else{
        echo '<script>alert("Not valid user!");location.href="login.php"</script>';
    }


    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $sqlstr = "insert into photo(dID,img) values('$dID','$file')";

    if(mysqli_query($conn, $sqlstr)){
        echo '<script>alert("img inserted into Database!");location.href="insert.php"</script>';
    }
}

if(isset($_POST["anyone"]))
{
    $username = $_POST['username'];
    $pw = $_POST['password'];

    $sqlstr = "select * from users where userID='$username' and password='$pw'";

    $result = $conn->query($sqlstr);

    if ($result->num_rows > 0) {
        echo '<script>alert("Login Succeed!");location.href="query_user.php"</script>';
    }
    else{
        echo '<script>alert("Not valid user!");location.href="login.php"</script>';
    }


//    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
//    $sqlstr = "insert into photo(dID,img) values('$dID','$file')";
//
//    if(mysqli_query($conn, $sqlstr)){
//        echo '<script>alert("img inserted into Database!");location.href="insert.php"</script>';
//    }
}




$conn -> close();