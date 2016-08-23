<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/10 0010
 * Time: 10:29
 */
?>
<html>
<head>
    <title>商品详情</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>

</head>
<body>
    <?php
        session_start();
    ?>

    <div id="loginStatus" style="float:right">
        <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : '[未登陆]' ?>
        <?php if(isset($_SESSION['username'])) {?>
            <form action="../controller/logout.php" method="post">
                <input type="submit" value="登出" />
            </form>
        <?php }?>
    </div>
    <h1>aa</h1>
    <input id="toShoppingCart" type="button" value="加入购物车"/>
    <form action="../controller/BuyNowHandler.php" method="post">
        <input type="submit" value="立即购买" />
    </form>

    <script type="text/javascript">
        function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, "\\$&");
            var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, " "));
        }

        $("#toShoppingCart").on("click", function(){
            $.ajax({
                url:'../controller/AjaxHandler.php',
                data:{id:getParameterByName('id')},
                type:"POST",
                success:function(res){
                    alert(res);
                }
            });
        });
    </script>
</body>
</html>
