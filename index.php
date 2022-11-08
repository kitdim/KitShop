<?php

define('VG_ACCESS',true);

header('Content-Type:text/html;charset=utf-8');
session_start();

require_once 'config.php';
require_once 'core/base/settings/internal_settings.php';
require_once 'core/libraries/functions.php';
use Core\base\exceptions\RouteException;
use Core\base\controller\RouteController;

try {
    RouteController::getInstance()->route();
}
catch (RouteException $e){
    exit($e->getMessage());
}