<?php


namespace core\base\settings;
use core\base\settings\Settings;

class ShopSettings
{
    static private $_instance;
    private $baseSettings;

    private $routes = [
        'plugins' => [
            'path' => 'core/plugins/',
            'hrUrl' => false,
            'dir' => 'controller',
            'routes' =>[

            ]
        ]
    ];

    private $teplateArr = [
        'text' => ['price', 'short'],
        'textarea' => ['goods_content']
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

        self::$_instance = new self;
        self::$_instance->baseSettings = Settings::instance();
        $baseProperties = self::$_instance->baseSettings->clueProperties(get_class());
        self::$_instance->setProperty($baseProperties);

        return self::$_instance;
    }

    protected function setProperty($properties){
        if ($properties){
            foreach ($properties as $name => $property){
                $this->$name = $property;
            }
        }
    }
}