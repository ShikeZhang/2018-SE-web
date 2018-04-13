<!DOCTYPE HTML>
<html>
<!--<head>-->
<!--    <meta http-equiv="content-type" content="text/html; charset=utf-8">-->
<!--    <title> upload image to db demo </title>-->
<!--</head>-->
<head>
    <meta charset="utf-8" />
    <title>请插入图片!</title>
    <link rel="stylesheet" href="insert.css" type="text/css" />
</head>

<ul>
    <li><a href="query.php">查询</a ></li>
    <li><a href="insert.php">插入</a ></li>
    <li><a href="delete.php">删除</a ></li>
    <li><a href="update.php">更新</a ></li>
    <li><a href="login.php">退出</a ></li>
</ul>

<body background="picture1.jpg">
<div id="content">
    <h1 align="center"> 请输入用户ID，名字和身份图片 </h1>
    <form name="form1" action="updateDB.php" method="post" enctype="multipart/form-data">
        <div id = "dossierid">
            <P align = "center">
                <span class="s">dossierID：</span>
                <input type="text" name="dID_update"></P>
        </div>
        <div id ="dossierid">
            <p align = "center">
                <span class="s">名字</span>
                <input type="text" id = "name_update" name="name_update"></p>
        </div>
        <div id ="imageDiv">
            <p align = "center">
                <span class="s">图片：</span>
                <input type="file" id = "image_update" name="image_update"></p>
        </div>
        <div id = "submit">
            <p align = "center"><input type="submit" name="update" id="update" value="update"></p>
        </div>
    </form>
</div>
</body>
</html>