<?php
/**
 * Created by PhpStorm.
 * User: 22876
 * Date: 2020/4/19
 * Time: 11:52
 */

namespace Classes;

class Loader
{
    static function autoload($class){
        require BASEDIR.'/'.str_replace('\\', '/', $class).'.php';
    }
}
