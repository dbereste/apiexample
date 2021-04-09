<?php

class GetInstance
{
    public static $instance;
    public function __construct(){}
    public function __clone(){}

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}