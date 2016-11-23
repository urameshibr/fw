<?php

namespace Core\Routing;

abstract class Route extends Router
{
    public static function get($uri, $action)
    {
        $route = ['uri' => $uri, 'uses' => $action, 'type' => 'GET'];
        self::$routes = $route;
    }

    public static function post()
    {
        //
    }
}