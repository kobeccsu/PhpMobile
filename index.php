<?php
require ("bll/category.php");
require ("SqlHelp.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta name="format-detection" content="telephone=no">
</head>
    <body>
        <div>
            <?php $mallList = Category::getMallCategory(); ?>
            <?php foreach($mallList as $item) {?>
                <div style="width: 4.625rem; height: 5.375rem;background-image: url('http://img.alicdn.com/bao/uploaded/i2/839158732/TB2n5kVppXXXXanXXXXXXXXXXXX_!!839158732.jpg_q50.jpg');background-size: contain;"><?php echo $item['name'] ?></div>
            <?php } ?>

        </div>
    </body>
</html>