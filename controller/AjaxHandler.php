<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/15 0015
 * Time: 23:00
 */
require '../bll/ShoppingCart.php';
require '../SqlHelp.php';
use bll\ShoppingCart;

session_start();

// 登录了的会员
$id = $_REQUEST['id'];
$bll = new ShoppingCart();
$loginedUsername = isset($_SESSION['username']) ? $_SESSION['username'] : null;
if(isset($loginedUsername)){
//    $hadShoppingCart =  $bll->getShoppingCartByUsername();
    if(isset($_SESSION['anonymouse'])){
//        $hadShoppingCart = array_unique(array_push($hadShoppingCart, $_SESSION['anonymouse']));
        foreach($_SESSION['anonymouse'] as $item => $value){
            $shoppingCart = array('id' => rand(1,100000), 'user_id' => $loginedUsername, 'goods_id'=>$value, 'is_anonymouse' => false);
            $bll->insert($shoppingCart);
        }
    }
}else{
    if (isset($_SESSION['anonymouse'])){
        $_SESSION['anonymouse'] = array_unique(array_push($_SESSION['anonymouse'] , $id));
    }
    else{
        $_SESSION['anonymouse'] = array($id);
    }
}

$shoppingCart = array('id' => rand(1,100000), 'user_id' => isset($loginedUsername) ? $loginedUsername :  session_id(), 'goods_id'=>$id, 'is_anonymouse' => isset($loginedUsername) ? false : true);
$bll->insert($shoppingCart);

echo json_encode(array('msg' => 'ok'));