<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/1 0001
 * Time: 16:13
 */

$name = $_POST["username"];
$password = $_POST["password"];

if ($name == 'zhoulei' && $password == '123') {
    session_start();
    $_SESSION["username"] = $name;

    return json_encode(array('msg'=>'登陆成功'));
}

return json_encode(array('msg'=>'登陆失败'));
