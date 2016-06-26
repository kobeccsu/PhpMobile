<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/2 0002
 * Time: 14:54
 */

$redis = new redis();
$redis->connect("127.0.0.1", 6379);
$redis->set("test", "222");

//echo $redis->get("test");
//if($redis->delete("test")){
//    echo '删除成功';
//}else{
//    echo '删除失败';
//}

//$result = $redis->getMultiple(array('test',"test1"));
//print_r($result);
//$redis->delete("test");
//$redis->lPush("test", "1010");
//$redis->lPush("test", "2020");
//$redis->rPush("test", "3030");
//$redis->rPush("test", "4040");
//$redis->lSet("test", 0, 9999);
//
//echo var_dump($redis->("test", 1, 3));

//$redis->delete("test");
//$redis->sAdd("test", "111");
//$redis->sAdd("test", "222");
//$redis->sAdd("test", "333");
//$redis->sAdd("test1", "222");
//$redis->sAdd("test1", "444");
//print_r($redis->sMembers("test"));

$redis->delete("test");
$redis->hSet("test", "a", "x");
$redis->hSet("test", "b", "y");
$redis->hSet("test", "c", "z");

var_dump($redis->hGetAll("test"));


