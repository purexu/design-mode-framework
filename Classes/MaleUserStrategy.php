<?php
/**
 * Created by PhpStorm.
 * User: 22876
 * Date: 2020/4/19
 * Time: 18:50
 */

namespace Classes;


class MaleUserStrategy implements UserStrategy
{
    function showAd()
    {
        echo "iphone6";
    }

    function showCategory()
    {
        echo "电子产品";
    }
}