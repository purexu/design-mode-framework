<?php
/**
 * Created by PhpStorm.
 * User: 22876
 * Date: 2020/4/19
 * Time: 15:49
 */
namespace Classes;

class Factory
{
    static function createDatabase(){
        $db = Database::getInstance();
        Register::set('db1', $db);
        return $db;
    }
}