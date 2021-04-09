<?php


class ModifyServices extends Database
{
    public function select_services($id_subscriber)
    {
        $sql = "SELECT Services FROM `subscribers` WHERE `id_subscriber` = ".$id_subscriber.";";
        return (self::exec($sql));
    }

    public function modify_service_to_subscriber($id_subscriber, $services)
    {
        $sql = "UPDATE `subscribers` SET `Services` = '".$services."' WHERE `id_subscriber` = ".$id_subscriber.";";
        return (self::exec($sql));
    }
}
