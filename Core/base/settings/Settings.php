<?php


namespace core\base\settings;


class Settings
{
    static private $_instance;

    private $routes = [
        'admin' => [
          'name' => 'admin',
          'path' => 'core/admin/controller/',
          'hrUrl' => false
      ],
        'settings' => [
            'path' => 'core/base/settings/'
      ],
        'plugins' => [
            'path' => 'core/plugins/',
            'hrUrl' => false
      ],
        'user' => [
            'path' => 'core/user/controller',
            'hrUrl' => true,
            'routes' => [

        ],
      ],
        'default' => [
            'controller' => 'IndexController',
            'inputMethod' => 'inputData',
            'outputMethod' => 'outputData'
        ]
    ];

    private function __construct(){

    }
    private function __clone(){

    }

    static public function get($prop){
        return self::instance()->$prop;
    }

    static public function instance(){
        if (self::$_instance instanceof self){
            return self::$_instance;
        }

        return self::$_instance = new self;
    }
}