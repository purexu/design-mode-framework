<?php
/**
 * Created by PhpStorm.
 * User: 22876
 * Date: 2020/4/19
 * Time: 9:35
 */
define('BASEDIR', __DIR__);
include BASEDIR.'/Classes/Loader.php';
spl_autoload_register('\\Classes\Loader::autoload');

$db = Classes\Register::get('db1');