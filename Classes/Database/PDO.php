<?php
/**
 * Created by PhpStorm.
 * User: 22876
 * Date: 2020/4/19
 * Time: 17:26
 */
namespace Classes\Database;

use Classes\IDatabase;

class PDO implements IDatabase
{
    protected $conn;

    function connect($host, $user, $passwd, $dbname)
    {
        $conn = new \PDO("mysql:host=$host;dbname=$dbname", $user, $passwd);
        $this->conn = $conn;
    }

    function query($sql)
    {
        return $this->conn->query($sql);
    }

    function close()
    {
        unset($this->conn);
    }
}