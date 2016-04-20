<?php

namespace App;

class Env
{
    public static function get()
    {
        if (!defined('ENVIROMENT')) {
            throw new \InvalidArgumentException("ENVIROMENT is undefined!");
        }
        if (!preg_match('/[a-zA-Z_][a-zA-Z0-9_]*/', ENVIROMENT)) {
            throw new \InvalidArgumentException("ENVIROMENT format error!");
        }
        return ENVIROMENT;
    }
}