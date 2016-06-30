<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/30 0030
 * Time: 21:49
 */
class Goods
{
    public function getAllGoods()
    {
        $cate = new SqlHelp();
        return $cate->getAll("select id from mall_goods");
    }
}