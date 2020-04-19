<?php
/**
 * Created by PhpStorm.
 * User: 22876
 * Date: 2020/4/19
 * Time: 16:02
 */

namespace Classes;


class Register
{
    protected static $objects;

    static function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }

    static function get($name)
    {
        return self::$objects[$name];
    }

    static function _unset()
    {

    }
}