<?php

namespace app\classes;

class Route
{
    public static function getRoute(string $uri, array $routes)
    {
        if (! array_key_exists($uri, $routes)) {
            throw new \Exception("Page not found!");
        }

        return __DIR__. "/../controllers/{$routes[$uri]}.php";

    }

}