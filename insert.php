<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title> upload image to db demo </title>
    <link rel="stylesheet" href="index.css" type="text/css" />
</head>

<ul>
    <li><a href="query.php">查询</a></li>
    <li><a href="insert.php">插入</a></li>
    <li><a href="delete.php">删除</a></li>
    <li><a href="login.php">退出</a></li>
</ul>


<body>
<div>
<h3 align="center"> 请输入用户ID和图片 </h3>
<form name="form1" action="insertDB.php" method="post" enctype="multipart/form-data">
    <P>dossierID<input type="text" name="dID_insert"></P>
    <p>图片：<input type="file" name="image"></p>
    <p><input type="submit" name="insert" id="insert" value="insert"></p>
</form>

    <br />
    <br />
</div>
</body>
</html>