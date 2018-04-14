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
<div id="myDiv" >
    <h1 align="center"> 请输入要查询的用户ID </h1>
    <form action="queryDB.php" method="get">
        <div id="dossierid">
            <p align=" center">
            <span>dossierID:</span>
            <input type="text" name="dID">
            </p>
        </div>
        <div id = "submit">
            <p align = "center"><input type="submit" name="insert" id="insert" value="提交"></p>
        </div>
    </form>
</div>


</body>
</html>
