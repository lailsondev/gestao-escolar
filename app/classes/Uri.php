<?php

namespace app\classes;

class Uri
{
    public static function getUri(): string
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}