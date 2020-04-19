<?php
/**
 * Created by PhpStorm.
 * User: 22876
 * Date: 2020/4/19
 * Time: 18:49
 */

namespace Classes;


class FemaleUserStrategy implements UserStrategy
{
    function showAd()
    {
        echo "2014新款女装";
    }

    function showCategory()
    {
        echo "女装";
    }
}