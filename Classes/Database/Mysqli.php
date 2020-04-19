<?php
/**
 * Created by PhpStorm.
 * User: 22876
 * Date: 2020/4/19
 * Time: 17:26
 */

namespace Classes\Database;

use Classes\IDatabase;

class Mysqli implements IDatabase
{
    protected $conn;

    function connect($host, $user, $passwd, $dbname)
    {
        $conn = mysqli_connect($host, $user, $passwd, $dbname);
        $this->conn = $conn;
    }

    function query($sql)
    {
        return mysqli_query($this->conn, $sql);
    }

    function close()
    {
        mysqli_close();
    }

}