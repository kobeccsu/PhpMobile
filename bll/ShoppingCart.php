<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/16 0016
 * Time: 22:12
 */

namespace bll;


class ShoppingCart
{
    public function insert($entity)
    {
        $util = new \SqlHelp();
        $sql = "INSERT INTO zlTop.shoppingCart (id, user_id, goods_id, 	is_anonymouse) VALUES ('${entity['id']}', '${entity['user_id']}', " .
            " '${entity['goods_id']}', '${entity['is_anonymouse']}')";
        $util->exec_sql($sql);
    }

    public function getShoppingCartByUsername($user_id){
        $util = new \SqlHelp();
        $sql = "select * from shoppingCart where user_id = " . $user_id;
        return $util->getAll($sql);
    }
}