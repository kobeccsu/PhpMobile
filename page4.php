<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/10 0010
 * Time: 9:56
 */

require "SqlHelp.php";
echo  '新建的没有问题';

class foo {
    public $value = 42;

    public function &getValue() {
        $GLOBALS["myname"] = "zhoulei";
        return $this->value;
    }
}

$obj = new foo();
$obj->getValue();

echo $GLOBALS["myname"];
echo $_SERVER["PHP_SELF"];

foreach($_SERVER as $key => $value){
    echo '$_SERVER['. $key .']='.$value.'<br/>';
}

$help = new SqlHelp();
$result = $help->exec_sql("select * from baseinfo");
while($row = mysqli_fetch_array($result)){
    echo "id : ${row['id']}, name: ${row['name']}, age: ${row['age']}";
}

phpinfo();



