<?php
/**
 * Created by PhpStorm.
 * User: 22876
 * Date: 2020/4/19
 * Time: 21:48
 */

namespace Classes;


abstract class EventGenerator
{
    protected $observers = array();

    function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }
    function notify()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update();
        }
    }
}