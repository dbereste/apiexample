<?php
    final class Database
    {
        private $host;
        private $user;
        private $pass;
        private $conn;
        public $mysqli;
        public function __construct() {
            $this->db_connect();
        }

        private function db_connect() {
            $this->host = 'localhost';
            $this->user = 'root';
            $this->pass = '';
            $this->conn = 'lyca';
            $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->conn);
            return $this->mysqli;
        }

        public function exec($sql) {
            $result = $this->mysqli->query($sql);
            return $result;
        }
        #selectare servicii/servicii a unui subscriber/subscriebrului
        public function select_services() {
            $sql = "SELECT * from `services`";
            return ($this->exec($sql));
        }
        public function select_subscribers() {
            $sql = "SELECT * from subscribers;";
            return ($this->exec($sql));
        }
        public function select_subscriber_by_id($id) {
            $sql = "SELECT * from subscribers WHERE id_subscriber = " . $id . ";";
            return ($this->exec($sql));
        }
        #Adaugarea/modificarea/stergerea subscriberilor
        public function add_subscriber($name, $surname, $phonenumber, $email, $birthdate, $isActive, $services) {
            $sql ="INSERT INTO `subscribers` (`id_subscriber`, `Name`, `Surname`, `Birthdate`, `Email`, `PhoneNumber`, `isActive`, `Services`) VALUES (NULL, '".$name."', '".$surname."', '".$birthdate."', '".$email."', '".$phonenumber."', '".$isActive."', '".$services."');";
            return ($this->exec($sql));
        }
        public function modify_subscriber($id, $name, $surname, $phonenumber, $email, $birthdate, $isActive, $services) {
            $sql ="UPDATE `subscribers` SET `Name` = '".$name."', `Surname` = '".$surname."', `Birthdate` = '".$birthdate."', `Email` = '".$email."', `PhoneNumber` = '".$phonenumber."', `isActive` = '".$isActive."', `Services` = '".$services."' WHERE `subscribers`.`id_subscriber` = ".$id.";";
            return ($this->exec($sql));
        }
        public function delete_subscriber($id) {
            $sql = "DELETE FROM `subscribers` WHERE `subscribers`.`id_subscriber` = ".$id.";";
            return ($this->exec($sql));
        }
        #adaugarea serviciilor la un subscriber
        public function add_service_to_subscriber($id_subscriber, $services) {
            $sql = "UPDATE `subscribers` SET `Services` = '".$services."' WHERE `subscribers`.`id_subscriber` = ".$id_subscriber.";";
        }
        #Creare si stergerea servicii
        public function delete_service($id) {
            $sql = "DELETE FROM `services` WHERE `services`.`id_services` = ".$id.";";
            return ($this->exec($sql));
        }

        public function create_service($name, $price, $isActive) {
            $sql = "INSERT INTO `services` (`id_services`, `name`, `price`, `isActive`) VALUES (NULL, '".$name."', '".$price."', '".$isActive."');";
            return ($this->exec($sql));
        }

        public function insert_log($action, $date, $error)
        {
            $sql = "INSERT INTO `logs` (`id`, `action`, `date`, `error`) VALUES (NULL, '".$action."', '".$date."', '".$error."');";
            return ($this->exec($sql));
        }

        public function check_log() {
            $sql = "SELECT * FROM `logs` ORDER BY id DESC;";
            return ($this->exec($sql));
        }
        //<<------------------------>>
    }
