<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/1 0001
 * Time: 10:59
 */?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            body
            {
                font-size:14px;
            }
            .main{
                height:400px;
            }
            div label{
                height:26px;
                line-height: 26px;
                margin:0 5px;
                font-size:14px;
            }
            .form div{
                height:26px;
                line-height: 26px;
            }

        </style>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
        <meta content="yes" name="apple-mobile-web-app-capable">
        <meta content="black" name="apple-mobile-web-app-status-bar-style">
        <meta name="format-detection" content="telephone=no">
    </head>
    <body>
        <div class="main">
            <h1>您需要登陆我们的系统</h1>
            <form class="form" action="../controller/loginHandler.php" method="post" enctype="application/x-www-form-urlencoded">
                <div class="usrname eachline" ><label>用户名</label><input type="text"  name="username" placeholder="非中文字符"/></div>
                <div class="password eachline"><label>密码</label><input type="password" name="password" /></div>
                <button type="submit">提交</button>
            </form>
        </div>
    </body>
</html>
