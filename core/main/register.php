<?php

/**
 * Created by PhpStorm.
 * User: Przemek
 * Date: 18.07.2015
 * Time: 22:18
 */
class register
{
    static private $registered = array();

    static public function registry($object)
    {
        if(isset(self::$registered[$object]))
        {

            return self::$registered[$object];
        }
        else
        {

            self::$registered[$object] = new $object;
            return self::$registered[$object];
        }
    }
}