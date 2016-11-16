<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/16 0016
 * Time: 22:18
 */
use yii\helpers\Html;

?>

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
        <p>注册</p>
        <?php \yii\widgets\ActiveForm::begin() ?>
        <div><label><span>用户名:</span><input type="text" id="username" name="username" /></label></div>
        <div><label><span>密码:</span><input type="password" id="psw" name="psw" /></label></div>
        <div><label><span>确认密码:</span><input type="password" id="psw-again" name="psw-again" /></label></div>
        <input type="submit" value="提交注册" />
        <?php \yii\widgets\ActiveForm::end() ?>
    </body>
</html>