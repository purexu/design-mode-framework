<?php
/**
 * Created by PhpStorm.
 * User: 22876
 * Date: 2020/4/19
 * Time: 17:26
 */

namespace Classes\Database;

use Classes\IDatabase;

class Mysql implements IDatabase
{
    protected $conn;

    function connect($host, $user, $passwd, $dbname){
        $conn = mysql_connect($host, $user, $passwd);
        mysql_select_db($dbname, $conn);
        $this->conn = $conn;
    }

    function query($sql){
        $res = mysql_query($sql, $this->conn);
        return $res;
    }

    function close(){
        mysql_close($this->conn);
    }
}