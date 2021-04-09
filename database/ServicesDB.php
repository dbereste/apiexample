<?php


class ServicesDB extends Database
{
    public function select_services() 
    {
        $sql = "SELECT * from `services`";
        return (self::exec($sql));
    }

    public function delete_service($id)
    {
        $sql = "DELETE FROM `services` WHERE `services`.`id_services` = ".$id.";";
        return (self::exec($sql));
    }

    public function create_service($name, $price, $isActive)
    {
        $sql = "INSERT INTO `services` (`id_services`, `name`, `price`, `isActive`) VALUES (NULL, '".$name."', '".$price."', '".$isActive."');";
        return (self::exec($sql));
    }

    public function select_service_by_id($id) {
        $sql = "SELECT * from `services` WHERE id_services = " . $id . ";";
        return (self::exec($sql));
    }

    public function modify_service($id, $name, $price, $isActive)
    {
        $sql ="UPDATE `services` SET `name` = '".$name."', `price` = '".$price."', `isActive` = '".$isActive."' WHERE `services`.`id_services` = ".$id.";";
        return (self::exec($sql));
    }
}
