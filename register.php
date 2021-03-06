<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>欢迎注册!</title>
    <link rel="stylesheet" href="register.css" type="text/css" />
</head>

<body background="picture1.jpg">
<div id="myDiv" >
    <nav id="myNav">
        <div id="login"><p><a href="login.php">管理员登录</a></p></div>
        <div id="register"><p>用户注册</p></div>
    </nav>
    <form id="myForm">
        <div id="div1"></div>
        <div id="usernameDiv">
            <span class="s">账号：</span>
            <input type="text" id="username" placeholder="请输入账号" />
            <span class="spanStyle" id="usernameSpan">*</span>
        </div>

        <div id="passwordDiv">
            <span class="s">密码：</span>
            <input type="password" id="password" placeholder="请输入密码" />
            <span class="spanStyle" id="passwordSpan">*</span>
        </div>

        <div id="repasswordDiv">
            <span class="s">确认密码：</span>
            <input type="password" id="repassword" placeholder="请再次输入密码" />
            <span class="spanStyle" id="repasswordSpan">*</span>
        </div>

        <div id="mailboxDiv">
            <span class="s">注册邮箱：</span>
            <input type="text" id="mailbox" placeholder="请输入邮箱" />
            <span class="spanStyle" id="mailboxSpan">*</span>
        </div>

        <div id="phoneDiv">
            <span class="s">手机号码：</span>
            <input type="text" id="phone" placeholder="请输入手机号码" />
            <span class="spanStyle" id="phoneSpan">*</span>
        </div>

<!--        <div id="vercodeDiv">-->
<!--            <span class="s">验证码：</span>-->
<!--            <input type="text" id="vercode" placeholder="请输入验证码" />-->
<!--            <span class="spanStyle" id="vercodeSpan">*</span>-->
<!--        </div>-->

        <div id="submitDiv">
            <input id="submit" type="submit" value="提交注册" />
        </div>

    </form>
</div>
<script type="text/javascript" src="register.js"></script>
</body>

</html>
