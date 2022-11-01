<?php


namespace Core\base\controllers;
use core\base\settings\Settings;
use core\base\settings\ShopSettings;


class RouteController
{
    static private $_instance;

    private function __clone()
    {
    }
    private function __construct()
    {
        $a = Settings::get('routes');
        $s1 = ShopSettings::get('property1');

        exit();
    }

    static public function getInstance(){
        if (self::$_instance instanceof self){
            return self::$_instance;
        }

        return self::$_instance = new self;
    }

}