<?php

class Loger extends Database
{
    public function log($action, $error)
    {
        $sql = "INSERT INTO `logs` (`action`, `date`, `HTTP_response`) VALUES ('".$action."', NOW(), '".$error."');";
        return self::exec($sql);
    }

    public function check_log()
    {
        $sql = "SELECT * FROM `logs` ORDER BY id DESC;";
        return self::exec($sql);
    }
}