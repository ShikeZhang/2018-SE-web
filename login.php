<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>欢迎登陆!</title>
    <link rel="stylesheet" href="login.css" type="text/css" />
</head>

<body background="picture1.jpg">
<div id="myDiv" >
    <nav id="myNav">
        <div id="login">
            <p>管理员登录</p>
        </div>
        <div id="register"><p><a href="register.php">用户注册</a></p></div>
    </nav>
    <form id="myForm" action="loginDB.php" method="post" enctype="multipart/form-data">
        <div id="div1"></div>
        <div id="usernameDiv">
            <span class="s">账号：</span>
            <input type="text" id="username" name="username" placeholder="请输入账号" />
            <span class="spanStyle" id="usernameSpan">*</span>
        </div>

        <div id="passwordDiv">
            <span class="s">密码：</span>
            <input type="text" id="password" name="password" placeholder="请输入密码" />
            <span class="spanStyle" id="passwordSpan">*</span>
        </div>

        <div id="submitDiv">
            <input type="submit" id="user" name="user" value="管理员登陆" style="width: 160px" />
            <input type="submit" id="anyone" name="anyone" value="用户登陆" style="width: 160px"/>
        </div>
    </form>
</div>
<!--<script type="text/javascript" src="login.js"></script>-->
</body>
</html>
