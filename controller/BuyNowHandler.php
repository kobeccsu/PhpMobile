<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/17 0017
 * Time: 22:43
 */
?>
<html>
<body>
<?php
if(!isset($_SESSION['username'])){
    echo '<script language="text/javascript">window.location.href="../views/login.php";</script>';
}
?>
</body>
<html>

