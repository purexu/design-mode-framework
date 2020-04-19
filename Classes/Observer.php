<?php
/**
 * Created by PhpStorm.
 * User: 22876
 * Date: 2020/4/19
 * Time: 21:49
 */

namespace Classes;


class Observer
{
    function update($event_info = null)
    {
        echo 'watching';
    }
}