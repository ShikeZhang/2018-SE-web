<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />·
    <title>欢迎登陆!</title>
    <link rel="stylesheet" href="index.css" type="text/css" />
</head>

<ul>
    <li><a href="query.php">查询</a></li>
    <li><a href="insert.php">插入</a></li>
    <li><a href="delete.php">删除</a></li>
    <li><a href="login.php">退出</a></li>
</ul>


<body background="1.jpg">
<div id="myDiv" >
    <form action="queryDB.php" method="get">
        <br />
        dossierID <input type="text" name="dID">
        <input type="submit" value="提交">
    </form>
</div>


</body>
</html>
