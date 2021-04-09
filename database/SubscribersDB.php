<?php


class SubscribersDB extends Database
{
    public function select_subscribers()
    {
        $sql = "SELECT * from subscribers;";
        return (self::exec($sql));
    }

    public function select_subscriber_by_id($id) {
        $sql = "SELECT * from subscribers WHERE id_subscriber = " . $id . ";";
        return (self::exec($sql));
    }

    public function add_subscriber($name, $surname, $birthdate, $email, $phonenumber, $isActive, $services)
    {
        $sql ="INSERT INTO `subscribers` (`id_subscriber`, `Name`, `Surname`, `Birthdate`, `Email`, `PhoneNumber`, `isActive`, `Services`) VALUES (NULL, '".$name."', '".$surname."', '".$birthdate."', '".$email."', '".$phonenumber."', '".$isActive."', '".$services."');";
        return (self::exec($sql));
    }

    public function modify_subscriber($id, $name, $surname, $birthdate, $email, $phonenumber, $isActive, $services)
    {
        $sql ="UPDATE `subscribers` SET `Name` = '".$name."', `Surname` = '".$surname."', `Birthdate` = '".$birthdate."', `Email` = '".$email."', `PhoneNumber` = '".$phonenumber."', `isActive` = '".$isActive."', `Services` = '".$services."' WHERE `subscribers`.`id_subscriber` = ".$id.";";
        return (self::exec($sql));
    }

    public function delete_subscriber($id)
    {
        $sql = "DELETE FROM `subscribers` WHERE `subscribers`.`id_subscriber` = ".$id.";";
        return (self::exec($sql));
    }
}