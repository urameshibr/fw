<?php

namespace Core\Config;

abstract class Config
{
    private static $base_path;
    private static $view_path;
    private static $public_path;
    private static $app_path;
    private static $route_path;
    private static $config_file = [];

    public static function loadConfigFile($configFile)
    {
        self::$config_file = include($configFile);
    }

    public static function run($configFile)
    {
        self::loadConfigFile($configFile);
        self::definePaths();
    }

    public static function definePaths()
    {
        self::$base_path    =   define('BASE_PATH' ,   self::$config_file['base_path']);
        self::$view_path    =   define('VIEW_PATH' ,   self::$config_file['base_path'] . self::$config_file['view_path']);
        self::$public_path  =   define('PUBLIC_PATH' , self::$config_file['base_path'] . self::$config_file['public_path']);
        self::$app_path     =   define('APP_PATH' ,    self::$config_file['base_path'] . self::$config_file['app_path']);
        self::$route_path   =   define('ROUTE_PATH' ,  self::$config_file['base_path'] . self::$config_file['route_path']);
    }


}