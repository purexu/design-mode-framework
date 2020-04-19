<?php
/**
 * Created by PhpStorm.
 * User: 22876
 * Date: 2020/4/19
 * Time: 15:54
 */

namespace Classes;

interface IDatabase
{
    function connect($host, $user, $passwd, $dbname);
    function query($sql);
    function close();
}

class Database
{
    protected $db;
    private function __construct()
    {

    }

    static function getInstance()
    {
        if(self::$db) {
            return self::$db;
        }
        self::$db = new self();
        return self::$db;
    }
}