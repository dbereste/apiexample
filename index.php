<?php
    define ('BASE_PATH', getcwd());
    define ('SRC_PATH', BASE_PATH.'\src');
    define ('DATABASE_PATH',BASE_PATH . '\database');
    define ('CONTROLLER_PATH', BASE_PATH . '\controller');
    define ('CONFIG_PATH', BASE_PATH . '\config');
    define ('HELPER_PATH', BASE_PATH . '\helper');

    include_once('loader.php');
