<?php

namespace App;

class Env
{
    public static function get()
    {
        if (!defined('ENVIROMENT')) {
            throw new \InvalidArgumentException("ENVIROMENT is undefined!");
        }
        return ENVIROMENT;
    }
}