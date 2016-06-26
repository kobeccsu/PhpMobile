<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/9 0009
 * Time: 15:13
 */

namespace Languages;

function inverse($x){
    if($x){
        throw new \Exception("除0错误");
    }
    return 1 / $x;
}

try{
    echo inverse(0);
    echo inverse(5);
}catch(\Exception $e){
    echo '捕获到异常信息'. $e->getMessage();
}

echo '程序还会继续执行';