<?php

namespace base\core;

trait TSingleton
{
    protected static object $instance;

    public static function getInstance()
    {
        if(self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }
}