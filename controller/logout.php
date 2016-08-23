<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/21 0021
 * Time: 16:14
 */
session_start();
unset($_SESSION['username']);
echo '用户已退出登陆';