<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>请查询图片!</title>
    <link rel="stylesheet" href="query.css" type="text/css" />
</head>

<ul>
    <li><a href="admin2.php">显示所有</a ></li>
    <li><a href="query.php">查询</a ></li>
    <li><a href="insert.php">插入</a ></li>
    <li><a href="delete.php">删除</a ></li>
    <li><a href="update.php">更新</a ></li>
    <li><a href="login.php">退出</a ></li>
</ul>

<body background="picture1.jpg">
<div>
<!--    <h1 align="center"> 请输入要查询的用户ID </h1>-->
<!--    <form action="admin2.php" method="get">-->

        <div style="width: 2000px;min-height:278px;height:auto !important;margin-left: 27px;padding: 80px;">
        <?php
            $servername = "127.0.0.1";
            $username = "root";
            $password = "123456";
            $dbname = "m34DB";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);}

        $sql = "SELECT * FROM Dossier";

        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            echo '<div style="max-width:70%;height:auto !important;margin-left: 27px;">';
            echo '<div>';
            while($row = $result->fetch_assoc()) {
                //queryDB.php?dID=515021910452&insert=提交
                echo '<a href="./queryDB.php?';
                echo 'dID='.$row['dossierId'];
                echo '&insert=提交">';
                echo '<img src="data:image/jpeg;base64,' . base64_encode($row['identityPicture']) . '" style="max-width:20%;margin-top=20%;"';
                echo'/>';
                echo '</a>';

            }
            echo '</div>';
            echo '</div>';
        }

        ?>

        </div>
<!--        <div id = "submit">-->
<!--            <p align = "center"><input type="submit" name="insert" id="insert" value="提交"></p>-->
<!--        </div>-->
<!--    </form>-->
</div>


</body>
</html>
