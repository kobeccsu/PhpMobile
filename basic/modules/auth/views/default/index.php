<?php
use yii\helpers\Html; ?>
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
    <?= Html::csrfMetaTags() ?>
</head>
<body>
<?php session_start(); ?>
<div id="loginStatus" style="float:right">
    <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : '[未登陆]' ?>
    <?php if(isset($_SESSION['username'])) {?>
        <form action="../controller/logout.php" method="post">
            <input type="submit" value="登出" />
        </form>
    <?php }?>
</div>
<div class="main">
    <h1>请登录</h1>
    <?php $form = \yii\bootstrap\ActiveForm::begin(['method'=>'post','action' => \yii\helpers\Url::to(['default/login'])]) ?>

        <div class="usrname eachline" ><label>用户名</label><input type="text"  name="username" placeholder="非中文字符"/></div>
        <div class="password eachline"><label>密码</label><input type="password" name="password" /></div>
        <button type="submit">提交</button>
    <?php \yii\bootstrap\ActiveForm::end() ?>
</div>
</body>
</html>
