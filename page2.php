<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/9 0009
 * Time: 14:45
 */

namespace myapp\sample;

include("classA.inc");

use ArrayObject;

$s = file_get_contents("store");
$a = unserialize($s);

$a->showOne();
echo "<br/> current namespace ". __NAMESPACE__;