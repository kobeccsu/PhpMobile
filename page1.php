<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/9 0009
 * Time: 14:41
 */
namespace myapp\rainday;

include("classA.inc");

$s = new A();
$s = serialize($s);

file_put_contents("store", $s);

