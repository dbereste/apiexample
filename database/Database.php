<?php


class Database
{
    private static $host;
    private static $user;
    private static $pass;
    private static $conn;
    public static $mysqli;
    private static $instance = null;

    public function __construct() {}
    public function __clone(){}
    public function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
            self::db_connect();
        }
        if (self::$mysqli->ping()) {
            self::db_connect();
        }
        return self::$instance;
    }
    private function db_connect()
    {
        self::$host = DB_HOST;
        self::$user = DB_USER;
        self::$pass = DB_PASSWORD;
        self::$conn = TITLE;
        self::$mysqli = new mysqli(self::$host, self::$user, self::$pass, self::$conn);
    }

    public function exec($sql)
    {
        $result = self::$mysqli->query($sql);
        return $result;
    }      
}
