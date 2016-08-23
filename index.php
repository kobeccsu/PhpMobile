<?php
require ("bll/category.php");
require ("bll/Goods.php");
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
            <?php $mallList = Category::getMallCategory();
                $goodBLL = new Goods();
                $good = $goodBLL->getAllGoods();
            ?>
            <?php foreach($mallList as $item)
            {
            ?>
                <div><?php echo $item['name'] ?></div>

                <?php foreach($good as $itergood){
                    if ($itergood['category_id'] == $item['id']){?>
                        <?php echo $itergood['name'] ?>
                            <a href="<?php echo 'views/goodsDetail.php?id=' . $itergood['id'] ?>">
                                <div style="width: 4.625rem; height: 5rem;
                                background-image: url('<?php echo $itergood['main_url'] ?>');
                                background-size: contain;"></div></a>
                    <?php
                    }
            }?>
            <?php
            }
            ?>
        </div>
        &copy;别想只管去做
    </body>
</html>