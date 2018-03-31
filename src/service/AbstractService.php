<?php
/**
 * Created by PhpStorm.
 * User: thiago
 * Date: 31/03/18
 * Time: 18:54
 */

namespace MyWonderland\Service;

/**
 * All services are singleton and stateless
 * @package MyWonderland\Service
 */
class AbstractService
{
    protected static $instance;

    protected function __construct() { }

    public static function getInstance()
    {
        if (self::$instance==null) {
            $class = __CLASS__;
            self::$instance = new $class();
        }
        return self::$instance;
    }

    protected function __clone(){ }

    protected function __wakeup() { }
}