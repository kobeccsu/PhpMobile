<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/26 0026
 * Time: 13:30
 */

class Category{

    public static function getMallCategory()
    {
        $cate = new SqlHelp();
        return $cate->getAll("select * from mall_category");
    }
}

