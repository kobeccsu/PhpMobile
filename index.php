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
        <ul>
            <?php $mallList = Category::getMallCategory(); ?>
            <?php while($item = mysqli_fetch_array($mallList)){?>
                <li><?php echo $item['name'] ?></li>
            <?php } ?>

        </ul>
    </body>
</html>