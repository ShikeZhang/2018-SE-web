<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>请查询图片!</title>
    <link rel="stylesheet" href="index.css" type="text/css" />
<!--    <link rel="stylesheet" href="column.css" type="text/css" />-->
<!--    <link rel="stylesheet" href="style.css" type="text/css" />-->
<!--    <link rel="stylesheet" href="agency.min.css" type="text/css" />-->
</head>

<ul style="height: 30px;font-size: 12pt;">
    <li><a href="query.php">返回</a ></li>
</ul>


<body background="picture1.jpg">



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
//echo "Connected successfully";

$dID = $_GET['dID'];

$sql = "SELECT * FROM Dossier where dossierId = '$dID'";

$result = $conn->query($sql);







if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        echo '<br \>';
        echo '<div class="infor_left" style="width:500px;min-height:278px;height:auto !important;float:left;margin-left: 27px;">';
        echo '<img src="data:image/jpeg;base64,' . base64_encode($row['identityPicture']) . '" style="max-width:100%"/>';
//        echo '</div>';
//
//        echo '<div class="col-sm-4" style="max-width:50%">';
//        echo '<br \>';
        echo "<table  border=\'1\' style='margin-left: 10%;width: 400px'>";
        echo "<tr><th>dossierId</th>";
        echo  "<td>".$row['dossierId']."</td></tr>";
        echo  "<tr><th>Name</th>";
        echo "<td>".$row['aName']."</td>";
        echo "</tr></table>";
        echo '</div>';
    }
}
else{
    echo '<script>alert("No such person!");location.href ="query.php"</script>' ;
}



$sql1 = "SELECT * FROM FaceRecord where assignedDossierId = '$dID' order by aTimestamp asc" ;

$result1 = $conn->query($sql1);
//header("Content-type: image/jpeg");

if ($result1->num_rows > 0) {
    echo '<div class="infor_right" style="width:1000px;min-height:500px;height:auto !important;float:right;margin-right: 0px;">';
    echo '<div class="columnBox" style="width:1000px">';
    echo '<div class="column_content" style="padding:8px;">';
    echo '<div class="column_r_center" style="width:900px;margin:0 auto;">';
    while($row = $result1->fetch_assoc()) {

        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['picture']).'" style="max-width:25%;"/>';

    }
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

}

$conn->close();
?>
</body>
</html>