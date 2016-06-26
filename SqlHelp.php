<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/30 0030
 * Time: 13:36
 */
class SqlHelp
{
    public function create_connection(){
        $con = mysqli_connect("localhost", "root", "123456", "zlTop");
        if(!$con){
            die("Counld not connection".mysqli_error());
        }
        return $con;
    }

    public function exec_sql($sql){
        $con = $this->create_connection();
        $result = mysqli_query($con, $sql);
        return $result;
    }
}